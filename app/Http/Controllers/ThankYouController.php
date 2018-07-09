<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThankYouController extends Controller
{
    function index(Request $request) {

        $user = new User;
        $user_data = $user->where('id', Auth::user()->id)->get();
        
        if($user_data[0]['success_uniq_key'] == $request->id) {
            $user->where('id', Auth::user()->id)->update(['premium' => true]);
            return view('payment-pages/thank-you');
        }

        return redirect(route(('landing'))); 
    }
}
