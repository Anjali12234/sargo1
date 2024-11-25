<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquirys=Enquiry::latest()->paginate();
        return view('admin.enquiry.index',compact('enquirys'));
    }



    public function show(Enquiry $enquiry)
    {
        return view('admin.enquiry.show',compact('enquiry'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        Alert::success('Enquiry message deleted successfully');
        return back();
    }
}
