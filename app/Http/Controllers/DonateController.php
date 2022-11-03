<?php

namespace App\Http\Controllers;

use Stripe;
use App\Models\Needhelp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function getform($id)
    {
      //  dd($id);
      $need = Needhelp::find($id);
     // dd($need);
      return view('donation.form');
    }

    /**
     * handling payment with POST
     */

     public function postform(Request $request)
     {
        # code...
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $payment = Stripe\Charge::create([
            'amount' => 100 * 150,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Making test payment',
            "metadata" => [
                "customer" => $request->name,
                'email' => $request->email
                ]

        ]);
        dd($payment);

       # dd($payment->status);
        #dd($payment->metadata->customer);
        #dd($payment->metadata->email);

     }
}
