<?php

namespace App\Http\Controllers;


use App\Http\Requests\CheckoutRequest;
use Konekt\Address\Models\CountryProxy;
use Vanilo\Cart\Facades\Cart;
use Vanilo\Checkout\Facades\Checkout;
use Vanilo\Order\Contracts\OrderFactory;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	protected function redirectTo($request)
	{
		return route('login');
	}

    public function show()
    {
        $checkout = false;

        if (Cart::isNotEmpty()) {
            $checkout = Checkout::getFacadeRoot();
            if ($old = old()) {
                $checkout->update($old);
            }

            $checkout->setCart(Cart::model());
        }

        return view('checkout.show', [
            'checkout'  => $checkout,
            'countries' => CountryProxy::all()
        ]);
    }

    public function submit(CheckoutRequest $request, OrderFactory $orderFactory)
    {
        $checkout = Checkout::getFacadeRoot();
        $checkout->update($request->all());
        $checkout->setCart(Cart::model());

        $order = $orderFactory->createFromCheckout($checkout);
        Cart::destroy();

	Mail::to($request->user())->send(new \App\Mail\Order($order));

        return view('checkout.thankyou', ['order' => $order]);
    }

}

