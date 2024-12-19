<form wire:submit.prevent="save">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" wire:model="title">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="bg_title">Background Title</label>
        <input id="bg_title" type="text" class="form-control" wire:model="bg_title">
        @error('bg_title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="product_category_id">Category</label>
        <select id="product_category_id" class="form-control" wire:model="product_category_id">
            <option value="">Select a category</option>
            @foreach ($productCategories as $category)
                <option value="{{ $category->id }}">{{ $category->title }} | {{ $category->type->label() }}</option>
            @endforeach
        </select>
        @error('product_category_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        {{-- <img src="{{$product->image}}" alt=""> --}}
        <label for="image">Image</label>
        <input id="image" type="file" class="form-control" wire:model="image">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="bg_image">Background Image</label>
        <input id="bg_image" type="file" class="form-control" wire:model="bg_image">
        @error('bg_image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" wire:model="description"></textarea>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label>Key Features</label>
        @foreach ($productKeyFeatures as $index => $feature)
            <div class="d-flex mb-4">
                <input type="text" wire:model="productKeyFeatures.{{ $index }}.feature" class="form-control">
                <button type="button" wire:click="removeKeyFeature({{ $index }})"
                    class="btn btn-danger ml-2">Remove</button>

            </div>
            @error("productKeyFeatures.{$index}.feature")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        @endforeach
        <button type="button" wire:click="addProductKeyFeature" class="btn btn-primary mt-2">Add Feature</button>
    </div>
    <div class="pt-5">
        <label class="font-bold">Product Steps</label>
        @foreach ($productSteps as $index => $productStep)
            <div class="col-md-12 row">
                <div class="col-md-6 mb-4">
                    <label for="">Step No</label>
                    <input type="text" wire:model="productSteps.{{ $index }}.step_no" class="form-control">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="">Step Name</label>
                    <input type="text" wire:model="productSteps.{{ $index }}.step_name" class="form-control">
                </div>
            </div>
            <div class="col-md-12 row">
                <div class="col-md-6 mb-4">
                    <label for="">Product Image</label>
                    <input type="file" wire:model="productSteps.{{ $index }}.image" class="form-control">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="">Product Name</label>
                    <input type="text" wire:model="productSteps.{{ $index }}.product_name"
                        class="form-control">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <label for="">No Of Coat Applied</label>
                <input type="text" wire:model="productSteps.{{ $index }}.coat"
                 class="form-control">
            </div>

            <button type="button" wire:click="removeProductStep({{ $index }})"
                class="btn btn-danger ml-2">Remove Step</button>
        @endforeach

        <button type="button" wire:click="addProductStep" class="btn btn-primary mt-2">Add Product Step</button>
    </div>


    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>
