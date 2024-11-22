<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Slider;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        
        return view('frontend.index');
    }

    public function productCategory(ProductCategory $productCategory)
    {
        return view('frontend.product.productList', compact('productCategory'));
    }
    public function productDetail(Product $product)
    {
        return view('frontend.product.productDetail',compact('product'));
    }
    public function service($value)
    {
      $services = Service::where('type', $value)->get();
      return view('frontend.service.serviceList', compact('services'));
    }

    public function color()
    {
        return view('frontend.color.color');
    }
}
