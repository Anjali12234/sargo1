<div class="row">
    <div class="col-md-6">
        <div class="input-style-1">
            <div class="select-position">
                <label for="menu_type">Menu Type</label>
                <select name="menu_type" wire:model="menu_type" id="menu_type" class="form-control">
                    <option value="">- - छान्नुहोस् - -</option>
                    @foreach(config('menuTypes') as $configMenu)
                        <option value="{{ $configMenu }}">{{ $configMenu }}</option>
                    @endforeach
                </select>
            </div>
            @error('menu_type')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    @if (!empty($menu_type))
        <div class="col-md-6">
            <div class="input-style-1">
                <label for="model_id">{{ $menu_type }}</label>
                <select name="model_id" id="model_id" wire:model="model_id" class="form-control">
                    <option value="">- - छान्नुहोस् - -</option>
                    @foreach ($menuTypes as $menuType)
                        @if ($menu_type === "category")
                            <option value="{{ $menuType->id }}" disabled>
                                {{ $menuType->title }}
                            </option>
                            @foreach ($menuType->categories as $category)
                                <option value="{{ $category->id }}">&nbsp; - - {{ $category->title }}</option>
                            @endforeach
                        @elseif ($menu_type === "productCategory")
                            <option value="{{ $menuType->id }}">{{ $menuType->title }}</option>
                        @endif
                    @endforeach
                </select>
                @error('model_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    @endif
</div>
