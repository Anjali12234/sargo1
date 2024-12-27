<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.product.index',compact('products'));
    }
    public function create()
    {
        return view('admin.product.create');
    }
    
    

    public function edit(Product $product)
    {
        return view('admin.product.edit',compact('product'));
    }

    

    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Product deleted successfully');
        return back();
    }
}
