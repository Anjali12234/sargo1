<?php

use App\Models\About;
use App\Models\Category;
use App\Models\Menu;
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
if (!function_exists('categories')) {
    function categories()
    {
        return Category::whereNull('category_id')->orderBy('position')->get();
    }
}
if (!function_exists('menus')) {
    function menus()
    {
        return Menu::with('model', 'children.model')->withCount('children')
            ->whereNull('menu_id')->orderBy('position', 'asc')->get();
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
