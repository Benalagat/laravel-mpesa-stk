<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PaymentsController extends Controller
{
    public function stk(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'YOURPASSKEY';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = '1';
        $PartyA = 'YOUR PHONE NUMBER';
        $PartyB = '174379';
        $PhoneNumber = 'YOUR PHONE NUMBER';
        $CallBackURL = 'https://domain.com/account';
        $AccountReference = 'AccountReference';
        $TransactionDesc = 'TransactionDesc';
        $Remarks = ' Remarks';
        

        $stkPushSimulation=$mpesa->STKPushSimulation(
        $BusinessShortCode, 
        $LipaNaMpesaPasskey, 
        $TransactionType, 
        $Amount, 
        $PartyA, 
        $PartyB, 
        $PhoneNumber, 
        $CallBackURL, 
        $AccountReference, 
        $TransactionDesc, 
        $Remarks
    );
    dd($stkPushSimulation);
    }
}
