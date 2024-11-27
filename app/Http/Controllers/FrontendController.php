<?php

namespace App\Http\Controllers;

use App\Http\Requests\Enquiry\StoreEnquiryRequest;
use App\Models\Color;
use App\Models\ColorCategory;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function index()
    {
        session()->flash('showPopup', true);

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
        $whyChooses = WhyChoose::all();
      $services = Service::where('type', $value)->get();
      return view('frontend.service.serviceList', compact('services','whyChooses'));
    }

    public function color()
    {
        $colorCategories = ColorCategory::all();
        return view('frontend.color.color',compact('colorCategories'));
    }

    public function colorDetail(Color $color)
    {
        $color->load('files');
   
        return view('frontend.color.colorDetail',compact('color'));
    }
    public function enquiry(StoreEnquiryRequest $request)
    {

        Enquiry::create($request->validated());
        Alert::success('Enquiry submitted successfully');
        return back();
    }
}
