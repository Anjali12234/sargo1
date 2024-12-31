<?php

namespace App\Http\Controllers;

use App\Http\Requests\Enquiry\StoreEnquiryRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\CategoryList;
use App\Models\Color;
use App\Models\ColorCategory;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use App\Models\WhyChoose;
use App\Notifications\EnquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function index()
    {
        session()->flash('showPopup', true);
        $sliders = Category::where('slider_page', 'LIKE', '%index%')->get();
        return view('frontend.index', compact('sliders'));
    }

    public function productCategory(ProductCategory $productCategory)
    {
        $sliders = Category::where('slider_page', 'LIKE', '%product%')->get();

        return view('frontend.product.productList', compact('productCategory', 'sliders'));
    }
    public function productDetail(Product $product)
    {
        return view('frontend.product.productDetail', compact('product'));
    }
    public function service($value)
    {
        $whyChooses = WhyChoose::all();
        $sliders = Slider::where('type', 'service')->get();

        $services = Service::where('type', $value)->get();
        return view('frontend.service.serviceList', compact('services', 'whyChooses', 'sliders'));
    }

    public function color()
    {
        $colorCategories = ColorCategory::all();
        return view('frontend.color.color', compact('colorCategories'));
    }
    public function contact()
    {
        $sliders = Category::where('slider_page', 'LIKE', '%contact_us%')->get();

                return view('frontend.contact',compact('sliders'));
    }
    public function about()
    {
        $abouts = About::all();
        return view('frontend.about', compact('abouts'));
    }
    public function whyChooseUs()
    {
        
        $whyChooses = WhyChoose::all();
        $sliders = Category::where('slider_page', 'LIKE', '%why_choose_us%')->get();

        return view('frontend.whyChooseUs',compact('whyChooses','sliders'));
    }

    public function colorDetail(Color $color)
    {
        $color->load('files');

        return view('frontend.color.colorDetail', compact('color'));
    }
    public function enquiry(StoreEnquiryRequest $request)
    {
        $user = User::first();
        $enquiry = Enquiry::create($request->validated());
        Notification::send($user, new EnquiryNotification($enquiry));
        Alert::success('Enquiry submitted successfully');
        return back();
    }

    public function category(Category $category)
    {
        return view('frontend.category.categoryList', compact('category'));
    }

    public function categoryList(CategoryList $categoryList)
    {

        return view('frontend.category.categoryDetail', compact('categoryList'));
    }
    public function staticMenus($slug)
    {
        switch ($slug) {

            case 'contact':
                $sliders = Category::where('slider_page', 'LIKE', '%contact_us%')->get();

                return view('frontend.contact',compact('sliders'));
                break;
            case 'about':
                $abouts = About::all();
                return view('frontend.about', compact('abouts'));
                break;
            case 'color':
                $colorCategories = ColorCategory::all();
                return view('frontend.color.color', compact('colorCategories'));
                break;
            case 'whyChooseUs':
                $whyChooses = WhyChoose::all();
                $sliders = Category::where('slider_page', 'LIKE', '%why_choose_us%')->get();
                return view('frontend.whyChooseUs',compact('whyChooses','sliders'));
                break;


            default:
                return response(view('errors.404'), 404);
        }
    }
}
