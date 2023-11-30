<?php

namespace App\PaymentGateways\intasend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\PaymentGatewaySettingsService;

class IntasendSettingsController extends Controller
{

    private $uniqueName = 'intasend';

    public function updateSettings(Request $request, PaymentGatewaySettingsService $settingService)
    {
        $validator = Validator::make($request->all(), [
            'environment' => 'required',
            'name' => 'required',
            'publicAPIKey' => 'required',
            'secret_key' => 'required',         
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(['gateway' => $this->uniqueName]);
        }        

        $keys = [
            'environment' => $request->environment,
            'publicAPIKey' => $request->publicAPIKey,
            'secret_key' => $request->secret_key,            
        ];
        
        $settingService->save($this->uniqueName, $request->name, $keys, $request->inactive);

        return redirect()->back()->withSuccess('Successfully updated');
    }
}
