<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Menu\StoreMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $menus = Menu::with('model', 'children.model')->withCount('children')
        ->whereNull('menu_id')->orderBy('position')->paginate(10);

        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $productCategories = ProductCategory::all();

        $mainMenus = Menu::with('children')->whereNull('menu_id')->get();

        return view('admin.menu.create', compact('mainMenus','productCategories'));
    }

    public function store(StoreMenuRequest $request)
    {
        Menu::create($request->validated() + $this->checkMenuCategory($request));
        Alert::success('Menu Added Successfully');
        return back();
    }
    

    public function edit(Menu $menu)
    {
        $productCategories = ProductCategory::all();        
        
        $mainMenus = Menu::with('children')->whereNull('menu_id')->get();

        return view('admin.menu.edit', compact('mainMenus', 'menu','productCategories'));
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->validated() + $this->checkMenuCategory($request));
        Alert::success('Menu Updated Successfully');
        return redirect(route('admin.menu.index'));
    }

    public function destroy(Menu $menu)
    {
        $menu->children()->delete();
        $menu->delete();
        Alert::success('Menu Deleted Successfully');
        return back();
    }

   

    public function checkMenuCategory($request): array
    {
        $menuCategory = null;
        if ($request->input('menu_type') == "category") {
            $menuCategory = Category::class;
        } 
        elseif($request->input('menu_type') == "productCategory")
        {
            $menuCategory = ProductCategory::class;
        }

        return [
            'model_type' => $menuCategory,
            'model_id' => $request->input('model_id') ?? null,
            'type' => $request->input('menu_type') ?? null
        ];
    }

    public function getMenuTypes(Request $request)
    {
        $menuType = $request->menu_type;

        if ($menuType === 'category') {
            $data = Category::with('categories')->whereNull('category_id')->get();
        } elseif ($menuType === 'productCategory') {
            $data = ProductCategory::latest()->get();
        } else {
            $data = [];
        }

        return response()->json($data);
    }
}
