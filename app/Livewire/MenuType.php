<?php



namespace App\Livewire;

use App\Models\Category;
use App\Models\ProductCategory;
use Livewire\Component;

class MenuType extends Component
{
    public $menu_type = null;
    public $model_id = null;
    public $menuTypes = [];
    public $menu = null;

    public function mount($menu = null)
    {
        if (!empty($menu)) {
            $this->menu_type = $menu->type;
            $this->model_id = $menu->model_id;
        }
    }

    public function updatedMenuType($value)
    {
        if ($value === "category") {
            $this->menuTypes = Category::with('categories')->whereNull('category_id')->get();
        } elseif ($value === "productCategory") {
            $this->menuTypes = ProductCategory::with('products')->latest()->get();
        } else {
            $this->menuTypes = [];
        }

        // Reset model_id when menu_type changes
        $this->model_id = null;
    }

    public function render()
    {
        return view('livewire.menu-type');
    }
}
