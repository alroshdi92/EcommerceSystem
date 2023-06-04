<?php

namespace App\Http\Controllers;

use App\Models\productss;
use App\Http\Requests\StoreproductssRequest;
use App\Http\Requests\UpdateproductssRequest;

class ProductssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['productsses']=Product::all();
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductssRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productss $productss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productss $productss)
    {
        $data['productsses']=Product::findOrFail($id);
        return view('product.edit');

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductssRequest $request, productss $productss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productss $productss)
    {
        //
    }
}
