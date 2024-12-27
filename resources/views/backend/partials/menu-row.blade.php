<tr >
    <td class="table-plus">{{ $numbering }}</td>
    <td>{{ $menu->title }}</td>
    <td>
        <div class="dropdown">
            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <i class="dw dw-more"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="{{ route('admin.menu.edit', $menu) }}">
                    <i class="dw dw-edit2"></i> Edit
                </a>
                <form action="{{ route('admin.menu.destroy', $menu) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item" onclick="return confirm('Are You sure want to delete')">
                        <i class="dw dw-delete-3"></i>Delete
                    </button>
                </form>
            </div>
        </div>
    </td>
</tr>

@if ($menu->children->isNotEmpty())
    @foreach ($menu->children as $childKey => $child)
        @include('backend.partials.menu-row', ['menu' => $child, 'numbering' => $numbering . '.' . ($childKey + 1)])
    @endforeach
@endif
