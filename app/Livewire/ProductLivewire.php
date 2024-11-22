<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductLivewire extends Component
{
    use WithFileUploads;

    public $productId;
    public $title;
    public $image;
    public $description;
    public $productCategories;
    public $product_category_id;
    public $productKeyFeatures = [];

    public function mount($productId = null)
    {
        $this->productCategories = ProductCategory::all();

        if ($productId) {
            $this->productId = $productId;
            $this->loadProduct();
        } else {
            $this->productKeyFeatures = [['feature' => '']]; // Initialize with one empty feature
        }
    }

    public function loadProduct()
    {
        $product = Product::with('productKeyFeatures')->findOrFail($this->productId);

        $this->title = $product->title;
        $this->description = $product->description;
        $this->product_category_id = $product->product_category_id;
        $this->productKeyFeatures = $product->productKeyFeatures->map(function ($keyFeature) {
            return ['feature' => $keyFeature->feature];
        })->toArray();
    }

    public function save()
    {
        $this->validate([
            'product_category_id' => 'required|integer|exists:product_categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'productKeyFeatures.*.feature' => 'required|string|max:255',
        ]);

        
        $product = Product::updateOrCreate(
            ['id' => $this->productId],
            [
                'product_category_id' => $this->product_category_id,
                'title' => $this->title,
                'image' => $this->image,
                'description' => $this->description,
            ]
        );

        // Sync Key Features
        $product->productKeyFeatures()->delete(); // Remove existing features
        foreach ($this->productKeyFeatures as $keyFeature) {
            $product->productKeyFeatures()->create($keyFeature);
        }

        session()->flash('message', $this->productId ? 'Product updated successfully!' : 'Product created successfully!');
        return redirect()->route('admin.product.index'); // Redirect after saving
    }

    public function render()
    {
        return view('livewire.product-livewire');
    }
}
