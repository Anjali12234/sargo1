<?php

use App\Models\ProductCategory;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;

if (!function_exists('productCategories')) {
    function productCategories()
    {
        return ProductCategory::all();
      
    }
}
if (!function_exists('sliders')) {
    function sliders()
    {
        return Slider::all();
      
    }
}
