<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryList\StoreCategoryListRequest;
use App\Http\Requests\CategoryList\UpdateCategoryListRequest;
use App\Models\Category;
use App\Models\CategoryList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryListController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
     public function index(Category $category)
    {
        $category->load('superCategories');
        return view('admin.category.categoryList.index', compact('category'));
    }


    public function create(Category $category)
    {
        $category->load('categories');
        $DocCategory = Category::whereNotNull('category_id')->latest()->get();

        $options = $category->categories()->pluck('title', 'id')->toArray();

        return view('admin.category.categoryList.create', compact('category', 'options'));
    }

   
    public function store(StoreCategoryListRequest $request, 
    Category $category)
    {
        DB::transaction(function () 
        use ($request, $category) {
            $data = $request->validated();
            
            $categoryList = $category->superCategories()->create($data);
        });

        Alert::success('Category List added successfully');
        return redirect(route('admin.category.categoryList.index',$category));

        
    }


    public function show(Category $category, CategoryList $categoryList)
    {
        CategoryList::get();
        return view('admin.category.categoryList.show', compact('category', 'categoryList'));
    }

    public function edit(Category $category, CategoryList $categoryList)
    {
        $category->load('categories');
        $options = $category->categories()->pluck('title', 'id')->toArray();
        return view('admin.category.categoryList.edit', compact('category', 'categoryList', 'options'));
    }

   
    public function update(UpdateCategoryListRequest $request, Category $category, CategoryList $categoryList)
    {
        DB::transaction(function () use ($request, $category, $categoryList) {
            $data = $request->validated();
          
            $categoryList->update($data);
        });
        Alert::success('Category List updated successfully');
        return redirect(route('admin.category.categoryList.index',$category));

    }

    public function destroy(Category $category, CategoryList $categoryList)
    {
        
        $categoryList->delete();
        Alert::success('Category List deleted successfully');
        return back();
    }
}
