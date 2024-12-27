<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ProductCategory;
use Livewire\Component;

class MenuCategoryLivewire extends Component
{
    public $menu_type = null;
    public $model_id = null;
    public $menuTypes = [];

    
    public function updatedMenuType($value)
    {
        $this->menu_type = $value;

        if ($this->menu_type === 'category') {
            $this->menuTypes = Category::with('categories')->whereNull('category_id')->get();
        } elseif ($this->menu_type === 'productCategory') {
            $this->menuTypes = ProductCategory::all();
        } else {
            $this->menuTypes = [];
        }

        $this->model_id = null;
    }

    public function render()
    {
        return view('livewire.menu-category-livewire');
    }
}
