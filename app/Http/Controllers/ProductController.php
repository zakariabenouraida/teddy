<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdCate;
use App\Product;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        $prodcates = ProdCate::all();
        return view('products.index', compact('products'), compact('prodcates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodcates = ProdCate::all();

        return view('products.create', compact('prodcates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productName' => 'required',
            'productCategory_id'=>'required',
            'productDetails'=>'required',
            'productPrice'=>'required',
            'productImage'=>'required|image',
        ]);
        $imagePath=request('productImage')->store('uploads', 'public');  

        $productImage = Image::make(public_path("storage/{$imagePath}"));
        $productImage->save();
        $product = Product::create([
            'productName'=>$validatedData['productName'],
            'productCategory_id'=>$validatedData['productCategory_id'],
            'productDetails'=>$validatedData['productDetails'],
            'productPrice'=>$validatedData['productPrice'],
            'productImage'=>$imagePath,
        ]);
   
        return redirect('admin/products')->with('success', 'product is successfully saved');
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
        $product = Product::findOrFail($id);
        $prodcates = ProdCate::all();

        return view('products.edit', compact('product'), compact('prodcates'));
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
        $validatedData = $request->validate([
            'productName' => 'required',
            'productCategory_id'=>'required',
            'productDetails'=>'required',
            'productPrice'=>'required',
            'productImage'=>'required|image',
        ]);

        $imagePath=request('productImage')->store('uploads', 'public');  

        $productImage = Image::make(public_path("storage/{$imagePath}"));
        $productImage->save();
        Product::whereId($id)->update([
            'productName'=>$validatedData['productName'],
            'productCategory_id'=>$validatedData['productCategory_id'],
            'productDetails'=>$validatedData['productDetails'],
            'productPrice'=>$validatedData['productPrice'],
            'productImage'=>$imagePath,
        ]);
        return redirect('admin/products')->with('success', 'product is successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('admin/products')->with('success', 'product is successfully deleted');
    }
}
