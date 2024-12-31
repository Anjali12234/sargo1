<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuperCategory\StoreSuperCategoryRequest;
use App\Http\Requests\SuperCategory\UpdateSuperCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuperCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index( Category $category)
    {

        $category->load('categories');
        return view('admin.category.superCategory.index',compact('category'));
    }

    public function store(StoreSuperCategoryRequest $request, Category $category)
    {

        $category->categories()->create($request->validated());

        Alert::success('Super Category added successfully');

        return back();
    }

    public function edit(Category $category, Category $superCategory)
    {
        return view('admin.category.superCategory.edit', compact('category', 'superCategory'));
    }

   
    public function update(UpdateSuperCategoryRequest $request, Category $category, Category $superCategory)
    {
        // dd($superCategory);
        $superCategory->update($request->validated());

        Alert::success('Super Category updated successfully');

        return redirect(route('admin.category.superCategory.index',$category));
    }

   
    public function destroy(Category $category, Category $superCategory)
    {
        $superCategory->delete();
        Alert::success('Super Category deleted successfully');
        return back();
    }

}
