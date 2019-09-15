<?php

namespace App\Http\Controllers;

use App\LineOrder;
use App\NewOrder;
use App\Order;
use Illuminate\Http\Request;
use App\shippingDetail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $neworders = NewOrder::all();
        // return view('showproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();
        // dd($userId);
        $shippingdetails = shippingDetail::where('user_id',$userId)->get();
        
        // $s =  $shippingdetails ->shippingAddress;
        //  dd($shippingdetails);
        return view('orders.create',compact('shippingdetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if($request->session()->has('cart')){

            $validatedData = $request->validate([
                'user_id' => 'required',
            ]);
            // dd($validatedData);
            $order = new Order($validatedData);
            $order->save();
        }
// dd($order);


$producttable=[];
// $validatedOrder = new NewOrder;
foreach (Session::get('cart') as $details)
{
    $neworder= new NewOrder([
        'order_id'=>$order->id,
        'product_id'=>$details['product_id'],
        'productSize'=>$details['size'],
        'productQuantity'=>$details['quantity'],
        
    ]);
    array_push($producttable,$details);

    $neworder->save($producttable);
    // dd($neworder);
}
Session::forget('cart');
return view('orders.thanks')->with('success', 'Order successfully saved');

// $validatedOrder ->order_id = $order->id;
// $validatedOrder ->product_id = $details['product_id'];
// $validatedOrder ->productSize = $details['size'];
// $validatedOrder ->productQuantity = $details['quantity'];

// array_push($producttable,$details);
        // dd(count($producttable));
        // for($i=0;$i <= count($producttable);$i++){
            
            
            // }
            // dd($producttable);
        // dd($validatedOrder);

        
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
