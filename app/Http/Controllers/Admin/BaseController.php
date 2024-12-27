<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $sharedCategories = Category::whereNull('category_id')->orderBy('position')->get();
        view()->share('sharedCategories', $sharedCategories);
    }
}
