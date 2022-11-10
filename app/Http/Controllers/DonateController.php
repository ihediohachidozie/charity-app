<?php

namespace App\Http\Controllers;

#use Stripe;
use App\Models\Needhelp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\ReceiptMail;
use App\Models\Donation;

class DonateController extends Controller
{
    public function getform($id)
    {
      //  dd($id);
      $need = Needhelp::find($id);
     // dd($need);
      return view('donation.form', compact('need'));
    }

    /**
     * handling payment with POST
     */

     public function postform(Request $request)
     {
      # dd($request->all());
        # code...
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $payment = Charge::create([

            "amount" => 100 * intval($request->amount),
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => $request->caption,
            'receipt_email' => $request->email

        ]);

        $msg = '';

        if($payment->status == 'succeeded'){

            Donation::create([
                'email' => $request->email,
                'needhelp_id' => $request->need_id,
                'name'  => $request->name,
                'amount' => intval($request->amount),
                'trans_id' => $payment->id,
                'receipt_url' => $payment->receipt_url,
                'status' => $payment->status
            ]);
            $url = $payment->receipt_url;
            $name = $request->name;
            $email = $request->email;
            $goal = $request->caption;

            $msg = 'Payment has been successfully processed.';

            Mail::to($email)->send(new ReceiptMail($url, $name, $goal));

        }else{
            $msg = 'Transaction failed.';
        }
        Session::flash('success', $msg);

        return back();
       # dd($payment->status);
        #dd($payment->metadata->customer);
        #dd($payment->metadata->email);

     }
}
