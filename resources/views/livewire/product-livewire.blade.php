<form wire:submit.prevent="save">
    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="bg_title">Title</label>
        <input id="bg_title" type="text" class="form-control" wire:model="bg_title">
        @error('bg_title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="product_category_id">Category</label>
        <select id="product_category_id" class="form-control" wire:model="product_category_id">
            <option value="">Select a category</option>
            @foreach($productCategories as $category)
                <option value="{{ $category->id }}">{{ $category->title }} | {{$category->type->label()}}</option>
            @endforeach
        </select>
        @error('product_category_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input id="image" type="file" class="form-control" wire:model="image">
        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label for="bg_image">Background Image</label>
        <input id="bg_image" type="file" class="form-control" wire:model="bg_image">
        @error('bg_image') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" class="form-control" wire:model="description"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div>
        <label>Key Features</label>
        @foreach($productKeyFeatures as $index => $feature)
            <div class="d-flex mb-4">
                <input type="text" wire:model="productKeyFeatures.{{ $index }}.feature" class="form-control">
                <button type="button" wire:click="removeKeyFeature({{ $index }})" class="btn btn-danger ml-2">Remove</button>
            
            </div>
            @error("productKeyFeatures.{$index}.feature")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        @endforeach
        <button type="button" wire:click="addProductKeyFeature" class="btn btn-primary mt-2">Add Feature</button>
    </div>

    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>
