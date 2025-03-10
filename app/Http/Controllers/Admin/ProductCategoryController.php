<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\ProductCategory\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductCategoryController extends BaseController
{
    public function index()
    {
        $productCategories = ProductCategory::paginate(10);
        return view('admin.productCategory.index',compact('productCategories'));
    }
    public function create()
    {
        return view('admin.productCategory.create');
    }
    
    public function store(StoreProductCategoryRequest $request)
    {
        ProductCategory::create($request->validated());
        Alert::success('Product Category added successfully');
        return back();
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('admin.productCategory.edit',compact('productCategory'));
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {

        $productCategory->update($request->validated());
        Alert::success('Product Category updated successfully');
        return redirect(route('admin.productCategory.create'));
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        Alert::success('Product Category deleted successfully');
        return back();
    }
}
