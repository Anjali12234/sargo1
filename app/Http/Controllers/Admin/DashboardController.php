<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $user = auth()->user(); // Get the authenticated user

        $unreadCount = $user->unreadNotifications()->count(); // Count unread notifications
        $totalCount = $user->notifications()->count();
        $categories =  Category::withCount('superCategories')->whereNull('category_id')->get();
        return view('backend.dashboard', compact('unreadCount', 'totalCount','categories'));
    }
}
