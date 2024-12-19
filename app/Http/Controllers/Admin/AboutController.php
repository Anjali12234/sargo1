<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function create()
    {
        $abouts = About::paginate(10);
        return view('admin.about.create',compact('abouts'));
    }
    
    public function store(StoreAboutRequest $request)
    {
        About::create($request->validated());
        Alert::success('About added successfully');
        return back();
    }

    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    public function update(UpdateAboutRequest $request, About $about)
    {

        $about->update($request->validated());
        Alert::success('About  updated successfully');
        return redirect(route('admin.about.create'));
    }

    public function destroy(About $about)
    {
        $about->delete();
        Alert::success('About  deleted successfully');
        return back();
    }
}