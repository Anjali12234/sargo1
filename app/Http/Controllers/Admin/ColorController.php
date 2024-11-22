<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreColorRequest;
use App\Http\Requests\Color\UpdateColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ColorController extends Controller
{
    public function create()
    {
        $colors = Color::paginate(10);
        return view('admin.color.create',compact('colors'));
    }
    
    public function store(StoreColorRequest $request)
    {
        Color::create($request->validated());
        Alert::success('Color added successfully');
        return back();
    }

    public function edit(Color $color)
    {
        return view('admin.color.edit',compact('color'));
    }

    public function update(UpdateColorRequest $request, Color $color)
    {

        $color->update($request->validated());
        Alert::success('Color updated successfully');
        return redirect(route('admin.color.create'));
    }

    public function destroy(Color $color)
    {
        $color->delete();
        Alert::success('Color deleted successfully');
        return back();
    }
}
