<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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


    public function cart()
    {

        return view('cart');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // dd(gettype($request->productQuantity));
        if (!$cart) {
            $cart = [
                $id . '|' . $request->productSize => [
                    "product_id" => $product->id,
                    "name" => $product->productName,
                    "price" => $product->productPrice,
                    // "productSizeID" => $request->productSizeId,

                    "size" => $request->productSize,
                    "quantity" => $request->productQuantity,
                    "photo" => $product->productImage,
                    "total" => 45
                ]
            ];

            session()->put('cart', $cart);
            // dd(session()->get('total'));

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id . '|' . $request->productSize])) {
            $cart[$id . '|' . $request->productSize]['quantity'] += $request->productQuantity;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // dd($cart);
        // dd(isset($cart[$id .'|'. $request->productSize])&&($cart[$id .'|'. $request->productSize]['size']!==$request->productSize));


        $cart[$id . '|' . $request->productSize] = [
            "product_id" => $product->id,

            "name" => $product->productName,
            "price" => $product->productPrice,
            // "productSizeID" => $request->productSizeId,

            "size" => $request->productSize,
            "quantity" => $request->productQuantity,
            "photo" => $product->productImage
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfull!');
    }


    public function update(Request $request)
    {
        // dd($request->id);
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');
            // dd($cart[$request->id .'|'. $request->productSize]);

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
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
