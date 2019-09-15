<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdCate;
use App\Product;
use App\Size;
use Illuminate\Support\Facades\DB;

class ShowProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $prodcates = ProdCate::all();
        return view('showproduct.index', compact('products'), compact('prodcates'));
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
    public function show($id,$productCategory_id)
    {
        $product = Product::findOrFail($id);
        $sizes = Size::all();
        $suggestions = DB::table('products')->select('*')->where('productCategory_id',$productCategory_id)->get();
        
// dd($suggestions);
        // $prodcate = ProdCate::findOrFail($id);
        return view('showproduct.show')->with([
                                        'product'       => $product,
                                        'sizes'         => $sizes,
                                        'suggestions'   => $suggestions
                                    ]);
    }
public function showcategory($id)
{
    $category = ProdCate::findOrFail($id);
    $product = Product::table('products')->select('*')->where('productCategory_id',$category)->get();
    return view('showproduct.category', compact('category'), compact('product'));
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
