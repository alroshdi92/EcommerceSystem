<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Http\Requests\StorecartsRequest;
use App\Http\Requests\UpdatecartsRequest;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorecartsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecartsRequest $request, carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carts $carts)
    {
        //
    }
}