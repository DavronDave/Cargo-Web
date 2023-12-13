<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = ProductList::sortable()->orderBy('id', 'DESC')->paginate(20);
        $products = Product::all();
        return view('admin.product-list.index', compact('productList', 'products'));
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
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        $product = new ProductList();
        $product->product_id = $request->product_id;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductList $productList)
    {
//        dd($request);
        $productList->delete();
        return redirect()->route('admin.product-list.index');
    }
}
