<?php

namespace App\Http\Controllers;

use App\NewOrder;
use App\Order;
use App\shippingDetail;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Stripe as CartalystStripe;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        // dd($userId);
        $shippingdetails = shippingDetail::where('user_id', $userId)->get();

        // $s =  $shippingdetails ->shippingAddress;
        //  dd($shippingdetails);
        return view('checkout.index', compact('shippingdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // dd($request->all());
        if ($request->session()->has('cart')) {
            $validatedData = $request->validate([
                'user_id' => 'required',
            ]);
            // dd($validatedData);
            $order = new Order($validatedData);
            $order->save();
        }

        $producttable = [];
        // $validatedOrder = new NewOrder;
        foreach (Session::get('cart') as $details) {
            $neworder = new NewOrder([
                'order_id' => $order->id,
                'product_id' => $details['product_id'],
                'productSize' => $details['size'],
                'productQuantity' => $details['quantity'],

            ]);
            array_push($producttable, $details);

            $neworder->save($producttable);
            // dd($details);
        }

        $orderid = $order->id;
        $customer = Auth::user()->id;
        $customername = Auth::user()->name;
        try {
            $charge = Stripe::charges()->create([
                'amount' => $request->total,
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    // 'customer_id' => Auth::id(),
                    'order_id' => $orderid,
                    'user_id' => $customer,
                    'user_name' => $customername,
                ],
            ]);
            Session::forget('cart');

            return view('orders.thanks')->with('success', 'Order successfully saved');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
