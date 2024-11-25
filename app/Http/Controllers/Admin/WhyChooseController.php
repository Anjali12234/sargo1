<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\WhyChoose;
use App\Http\Requests\WhyChoose\StoreWhyChooseRequest;
use App\Http\Requests\WhyChoose\UpdateWhyChooseRequest;
use RealRashid\SweetAlert\Facades\Alert;

class WhyChooseController extends Controller
{
    public function create()
    {
        $whyChooses = WhyChoose::paginate(10);
        return view('admin.whyChoose.create',compact('whyChooses'));
    }
    
    public function store(StoreWhyChooseRequest $request)
    {
        WhyChoose::create($request->validated());
        Alert::success('File added successfully');
        return back();
    }

    public function edit(WhyChoose $whyChoose)
    {
        return view('admin.whyChoose.edit',compact('whyChoose'));
    }

    public function update(UpdateWhyChooseRequest $request, WhyChoose $whyChoose)
    {

        $whyChoose->update($request->validated());
        Alert::success('File  updated successfully');
        return redirect(route('admin.whyChoose.create'));
    }

    public function destroy(WhyChoose $whyChoose)
    {
        $whyChoose->delete();
        Alert::success('File  deleted successfully');
        return back();
    }
}
