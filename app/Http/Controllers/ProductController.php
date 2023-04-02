<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductPropertyRepository;
use App\Repositories\ProductRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductRepository $productRepository): View
    {
        return view('products', ['products' => $productRepository->getAllProducts()]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id, ProductRepository $productRepository, ProductPropertyRepository $productPropertyRepository): View
    {
        $product = $productRepository->getProductByVariationId($id);
        $productVariants = $product->variants->map(function ($item) {return $item->property_value_id; })->toArray();
        return view('product', ['product' => $product, 'productVariants' => $productVariants, 'variations' => $productPropertyRepository->getProductProperties($product->id, $id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
