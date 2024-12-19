<?php

use App\Models\About;
use App\Models\ProductCategory;
use App\Models\Slider;
use App\Models\SystemSetting;
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



if (!function_exists('systemSetting')) {
    function systemSetting()
    {
        return Cache::rememberForever('systemSetting', function () {
            return SystemSetting::latest()->first();
        });
    }
}
// if (!function_exists('about')) {
//     function about()
//     {
//         return Cache::rememberForever('about', function () {
//             return About::latest()->first();
//         });
//     }
// }