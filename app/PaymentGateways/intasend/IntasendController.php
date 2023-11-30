<?php

// app/PaymentGateways/intasend/IntasendController.php

namespace App\PaymentGateways\intasend;

use App\Http\Controllers\Payments\PaymentGatewayController;
use Illuminate\Http\Request;
use Intasend\PaymentIntent;
use Intasend\Intasend;

class IntasendController extends PaymentGatewayController
{
    public function __construct()
    {
        parent::__construct('intasend');

        Intasend::setpublicAPIKey($this->gateway->keys->publicAPIKey);
    }

    public function index(Request $request)
    {
        $error = null;

        try {
            $data['total'] = $this->cart->getTotal();
            $data['gateway_name'] = $this->gateway->name;
            $data['publicAPIKey'] = $this->gateway->keys->publicAPIKey;
            return view('intasend', compact('data'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        if ($error) {
            $this->logError($error, 'While generating token');
        }

        return $this->redirectOnFailedTokenGeneration();
    }
}


    public function capturePayment(Request $request)
    {
        $intent = null;
        try {
            if (isset($request->payment_method_id)) {
                # Create the PaymentIntent
                $intent = PaymentIntent::create([
                    'payment_method' => $request->payment_method_id,
                    'amount' => $this->convertToCent($this->cart->getTotal()),
                    'currency' => strtolower($this->cart->getCurrency()),
                    'confirmation_method' => 'manual',
                    'confirm' => true,
                ]);
            }
            if (isset($request->payment_intent_id)) {
                $intent = PaymentIntent::retrieve(
                    $request->payment_intent_id
                );
                $intent->confirm();
            }
            $res = $this->generateResponse($intent);
        } catch (\Intasend\Exception\ApiErrorException $e) {
            # Display error on client
            $res = [
                'error' => $e->getMessage(),
            ];
        }

        return response()->json($res);
    }

    public function generateResponse($intent)
    {
        # Note that if your API version is before 2019-02-11, 'requires_action'
        # appears as 'requires_source_action'.
        if (($intent->status == 'requires_action' || $intent->status == 'requires_source_action') &&
            $intent->next_action->type == 'use_intasend_sdk'
        ) {
            # Tell the client side to handle the action
            return [
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret,
            ];
        } else if ($intent->status == 'succeeded') {
            # The payment didn’t need any additional actions and completed!
            # Handle post-payment fulfillment
            $token = $this->savePaymentRecords($this->cart->getTotal(), $intent->id);
            return [
                "success" => true,
                'redirect_url' => $this->urltoRedirectOnSuccess($token)
            ];
        } else {
            # Invalid status
            return ['error' => 'Could not process your payment'];
        }
    }

    private function convertToCent($amount)
    {
        // Intasend accepts the amount as cents only.
        return intval($amount * 100);
    }
}
