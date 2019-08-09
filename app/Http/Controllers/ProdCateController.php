<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdCate;
class ProdCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodcates = ProdCate::all();

        return view('prodcates.index', compact('prodcates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodcates.create');
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
            'productCategory' => 'required|max:255',
        ]);
        $prodcate = Prodcate::create($validatedData);
        return redirect('admin/prod_cates')->with('success', 'Category successfully saved');
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
        $prodcate = ProdCate::findorFail($id);

        return view('prodcates.edit', compact('prodcate'));
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
            'productCategory' => 'required|max:255',

        ]);
        ProdCate::whereId($id)->update($validatedData);

        return redirect('admin/prod_cates')->with('success', 'category is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodcate = ProdCate::findOrFail($id);
        $prodcate->delete();

        return redirect('admin/prod_cates')->with('success', 'category is successfully deleted');
    }
}
