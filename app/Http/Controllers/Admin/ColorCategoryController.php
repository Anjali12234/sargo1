<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorCategory\StoreColorCategoryRequest;
use App\Http\Requests\ColorCategory\UpdateColorCategoryRequest;
use App\Models\ColorCategory;
use RealRashid\SweetAlert\Facades\Alert;

class ColorCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function create()
    {
        $colorCategories = ColorCategory::paginate(10);
        return view('admin.colorCategory.create',compact('colorCategories'));
    }
    
    public function store(StoreColorCategoryRequest $request)
    {
        ColorCategory::create($request->validated());
        Alert::success('Color added successfully');
        return back();
    }

    public function edit(ColorCategory $colorCategory)
    {
        return view('admin.colorCategory.edit',compact('colorCategory'));
    }

    public function update(UpdateColorCategoryRequest $request, ColorCategory $colorCategory)
    {

        $colorCategory->update($request->validated());
        Alert::success('Color Category updated successfully');
        return redirect(route('admin.colorCategory.create'));
    }

    public function destroy(ColorCategory $colorCategory)
    {
        $colorCategory->delete();
        Alert::success('Color Category deleted successfully');
        return back();
    }
}
