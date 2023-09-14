<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Session;
use Stripe;
    
class PaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51NhuLAF9keBtyhcMj5RcabiDyZmNI0eqdIIdrUWkZzi8nzIiHiyua8NFOIqRzpkRW2bl3McA71ZshcP9RreygcDX00Rlwgo1Mk');
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from tutsmake.com."
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return back();
    }
}
