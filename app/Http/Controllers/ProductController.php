<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    public function index()
//    {
//        $products = Product::sortable()->orderBy('id', 'DESC')->get();
//        $product_categories = ProductCategory::all();
//        return view('admin.products.index', compact('products', 'product_categories'));
//    }

    public function index()
    {
        $products = Product::with('category')->sortable()->orderBy('id', 'DESC')->get();
        $product_categories = ProductCategory::all();
        return view('admin.products.index', compact('products', 'product_categories'));
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
            'name' => 'required',
            'code' => 'required|size:6',
            'position' => 'required',
            'category_id' => 'required',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->position = $request->position;
        $product->category_id = $request->category_id;
        $product->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return response()->json([
            'status' => 200,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|size:6',
            'position' => 'required',
            'category_id' => 'required',
        ]);

        $product->name = $request->name;
        $product->code = $request->code;
        $product->position = $request->position;
        $product->category_id = $request->category_id;

        $product->update();
        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
