{{-- <div class="form-group col-md-6">
    <label for="menu_type">Menu Type</label>
    <select class="custom-select2 form-control" name="menu_type" wire:change="changeMenuType" wire:model="menu_type"
        id="menu_type" style="width: 100%; height: 38px">
        <option value="">Type</option>
        @foreach (config('menuTypes') as $configMenu)
            <option value="{{ $configMenu }}">{{ $configMenu }}</option>
        @endforeach
    </select>
    <span class="text-warning">
        @error('menu_type')
            {{ $message }}
        @enderror
    </span>
</div>


@if (!empty($menu_type))
    <div class="form-group col-md-6">

        <label for="model_id">{{ $menu_type }}</label>
        <select class="custom-select2 form-control" name="model_id" id="model_id" wire:model="model_id"
            wire:change="changeMenuType" style="width: 100%; height: 38px">
            <option value="">Type</option>
            @foreach ($menuTypes as $menuType)
                @if ($menu_type == 'category' && $menuType->categories->isNotEmpty())
                    @foreach ($menuType->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                @endif

                @if ($menu_type == 'productCategory')
                    @foreach ($menuType->productCategory as $productCategory)
                        <option value="{{ $productCategory->id }}"> {{ $productCategory->title }}</option>
                    @endforeach
                @endif
            @endforeach
        </select>
        <span class="text-warning">
            @error('model_id')
                {{ $message }}
            @enderror
        </span>
    </div>

@endif



<button wire:click="test">Test</button> --}}
<div class="form-group col-md-6">
    <label for="menu_type">Menu Type</label>
    <select class="custom-select2 form-control" name="menu_type" wire:change="changeMenuType" wire:model="menu_type"
        id="menu_type" style="width: 100%; height: 38px">
        <option value="">Type</option>
        @foreach (config('menuTypes') as $configMenu)
            <option value="{{ $configMenu }}">{{ $configMenu }}</option>
        @endforeach
    </select>
    <span class="text-warning">
        @error('menu_type')
            {{ $message }}
        @enderror
    </span>
    {{$menu_type}}
</div>


@if (!empty($menu_type))
    <div class="form-group col-md-6">

        <label for="model_id">{{ $menu_type }}</label>
        <select class="custom-select2 form-control" name="model_id" id="model_id" wire:model="model_id"
            wire:change="changeMenuType" style="width: 100%; height: 38px">
            <option value="">Type</option>
            @foreach ($menuTypes as $menuType)
                @if ($menu_type == 'category' && $menuType->categories->isNotEmpty())
                    @foreach ($menuType->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                @endif

                @if ($menu_type == 'productCategory')
                    @foreach ($menuType->productCategory as $productCategory)
                        <option value="{{ $productCategory->id }}"> {{ $productCategory->title }}</option>
                    @endforeach
                @endif
            @endforeach
        </select>
        <span class="text-warning">
            @error('model_id')
                {{ $message }}
            @enderror
        </span>
    </div>

@endif