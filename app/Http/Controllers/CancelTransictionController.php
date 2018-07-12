<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CancelTransictionController extends Controller
{
    function index(Request $request) {

        $user = new User;
        $user = $user->where('id', Auth::user()->id)->get();
        
        if($user[0]['cancel_uniq_key'] == $request->id) {

            $merchant_id = '12583675';
            $merchant_key = '50w12ckzquif8';
            $cartTotal = 3000;
            $pfOutput = $merchant_key;
            $data = array(
                // Merchant details
                'merchant_id' => $merchant_id,
                'merchant_key' => $merchant_key,
                'return_url' => 'http://forexrockstar1.co.za/thank-you/'. $user[0]['success_uniq_key'],
                'cancel_url' => 'http://forexrockstar1.co.za/cancelled-transction/'.$user[0]['cancel_uniq_key'],
                'notify_url' => 'http://forexrockstar1.co.za/videos/',
                // Buyer details
                'name_first' => $user[0]['name'],
                'email_address'=> $user[0]['email'] ,
                // Transaction details
                'm_payment_id' => $user[0]['uniq_user_key'] , //Unique payment ID to pass through to notify_url
                // Amount needs to be in ZAR
                // If multicurrency system its conversion has to be done before building this array
                'amount' => number_format( sprintf( "%.2f", $cartTotal ), 2, '.', '' ),
                'item_name' => 'Item Name',
                'item_description' => 'Item Description',
                'custom_int1' => '9586', //custom integer to be passed through
                'custom_str1' => 'custom string is passed along with transaction to notify_url page'
            );
    
            // Create GET string
            foreach( $data as $key => $val ){
                if(!empty($val)){
                    $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
                }
            }
    
            // Remove last ampersand
            $getString = substr( $pfOutput, 0, -1 );
            if( isset( $passPhrase ) ) {
                $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
            }
            //$data['signature'] = md5( $getString );
    
    
            $testingMode = false;
            $pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';

            return view('payment-pages/cancelled-transction')->with([
            'data' => $data,
            'pfHost' => $pfHost
            ]);
        }

        return redirect(route(('landing'))); 
    }
}
