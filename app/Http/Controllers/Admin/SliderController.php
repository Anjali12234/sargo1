<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreSliderRequest;
use App\Http\Requests\Slider\UpdateSliderRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    public function create()
    {
        $sliders = Slider::paginate(10);
        return view('admin.slider.create',compact('sliders'));
    }
    
    public function store(StoreSliderRequest $request)
    {
        Slider::create($request->validated());
        Alert::success('Slider added successfully');
        return back();
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {

        $slider->update($request->validated());
        Alert::success('Slider updated successfully');
        return redirect(route('admin.slider.create'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        Alert::success('Slider deleted successfully');
        return back();
    }
}
