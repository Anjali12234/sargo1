<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        $categories = Category::whereNull('category_id')->orderBy('position')->paginate(10);

        return view('admin.category.main_category.index', compact('categories'));

    }

    public function store(StoreCategoryRequest $request)
    {

      
        Category::create($request->validated());
        Alert::success('Category added successfully');
        return redirect(route('admin.category.index'));
    }

    public function edit(Category $category)
    {
      
        return view('admin.category.main_category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
     

        $category->update($request->validated());
        Alert::success('Category updated successfully');
        return redirect(route('admin.category.index'));
    }

    public function destroy(Category $category)
    {

       
        $category->categories()->delete();

        $category->delete();
        Alert::success('Category deleted successfully');
        return back();
    }
}
