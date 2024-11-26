<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreColorRequest;
use App\Http\Requests\Color\UpdateColorRequest;
use App\Models\Color;
use App\Models\ColorCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    public function create()
    {
        $colorCategories = ColorCategory::all();
        $colors = Color::paginate(10);
        return view('admin.color.create',compact('colors','colorCategories'));
    }
    
    public function store(StoreColorRequest $request, Color $color)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $color->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('$colors/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        Color::create($request->validated());
        Alert::success('Color added successfully');
        return back();
    }

    public function edit(Color $color)
    {
        $colorCategories = ColorCategory::all();
        $color->load('files');
        return view('admin.color.edit',compact('color','colorCategories'));
    }

    public function update(UpdateColorRequest $request, Color $color)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $color->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('colors/' . Str::slug($request->input('name'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
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
