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
    public $bg_image;
    public $bg_title;
    public $description;
    public $productCategories;
    public $product_category_id;
    public $productKeyFeatures = [];
    public $productSteps = [];

    public function mount($productId = null)
    {
        $this->productCategories = ProductCategory::all();

        if ($productId) {
            $this->productId = $productId;
            $this->loadProduct();
        } else {
            $this->productKeyFeatures = [['feature' => '']]; // Initialize with one empty feature
            $this->productSteps = [['step_no' => '']]; // Initialize with one empty feature
            $this->productSteps = [['step_name' => '']]; // Initialize with one empty feature
            $this->productSteps = [['image' => '']]; // Initialize with one empty feature
            $this->productSteps = [['product_name' => '']]; // Initialize with one empty feature
            $this->productSteps = [['coat' => '']]; // Initialize with one empty feature
        }
    }

    public function loadProduct()
    {
        $product = Product::with('productKeyFeatures','productSteps')->findOrFail($this->productId);

        $this->title = $product->title;
        $this->bg_title = $product->bg_title;
        $this->description = $product->description;
        $this->product_category_id = $product->product_category_id;
        $this->productKeyFeatures = $product->productKeyFeatures->map(function ($keyFeature) {
            return ['feature' => $keyFeature->feature];
        })->toArray();
        $this->productSteps = $product->productSteps->map(function ($productStep) {
            return [
                'step_no' => $productStep->step_no,
                'step_name' => $productStep->step_name,
                'image' => $productStep->image,
                'product_name' => $productStep->product_name,
                'coat' => $productStep->coat
            ];
        })
        ->toArray();
    }

    public function save()
    {
        $this->validate([
            'product_category_id' => 'required|integer|exists:product_categories,id',
            'title' => 'required|string|max:255',
            'bg_title' => 'required|string|max:255',
            'image' => 'nullable',
            'bg_image' => 'nullable',
            'description' => 'nullable|string',
            'productKeyFeatures.*.feature' => 'required|string|max:255',
            'productSteps.*.step_no' => 'nullable|string|max:255',
            'productSteps.*.step_name' => 'nullable|string|max:255',
            'productSteps.*.image' => 'nullable',
            'productSteps.*.product_name' => 'nullable|string|max:255',
            'productSteps.*.coat' => 'nullable|string|max:255',
        ]);
    
        // Handle file uploads
        
        // Find the product or create a new one
        $product = Product::updateOrCreate(
            ['id' => $this->productId],
            [
                'product_category_id' => $this->product_category_id,
                'title' => $this->title,
                'bg_title' => $this->bg_title,
                'description' => $this->description,
                // Only update the image fields if new images are uploaded
                'image' => $this->image,
                'bg_image' => $this->bg_image,
            ]
        );
    
        // Sync Key Features
        $product->productKeyFeatures()->delete(); // Remove existing features
        foreach ($this->productKeyFeatures as $keyFeature) {
            $product->productKeyFeatures()->create($keyFeature);
        }
    
        // Sync Product Steps
        $product->productSteps()->delete(); // Remove existing steps
        foreach ($this->productSteps as $productStep) {
            
           
            $product->productSteps()->create($productStep);
        }
    
        session()->flash('message', $this->productId ? 'Product updated successfully!' : 'Product created successfully!');
        return redirect()->route('admin.product.index'); // Redirect after saving
    }
    

    public function addProductKeyFeature()
    {
        $this->productKeyFeatures[] = ['feature' => '']; // Add a new empty feature
    }
    public function addProductStep()
    {
        $this->productSteps[] = [
            'step_no' => '',
            'step_name' => '',
            'image' => null,
            'product_name' => '',
            'coat' => ''
        ];
    }

    public function removeKeyFeature($index)
    {
        unset($this->productKeyFeatures[$index]); // Remove the feature at the given index
        $this->productKeyFeatures = array_values($this->productKeyFeatures); // Reindex the array to prevent issues
    }
    public function removeProductStep($index)
    {
        unset($this->productSteps[$index]); // Remove the feature at the given index
        $this->productSteps = array_values($this->productSteps); // Reindex the array to prevent issues
    }

    public function render()
    {
        return view('livewire.product-livewire');
    }
}
