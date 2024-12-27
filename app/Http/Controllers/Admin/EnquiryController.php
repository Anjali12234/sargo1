<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EnquiryController extends BaseController
{
   
    public function index()
    {
        $enquirys=Enquiry::latest()->paginate();
        return view('admin.enquiry.index',compact('enquirys'));
    }



    public function show(Enquiry $enquiry)
    {
        return view('admin.enquiry.show',compact('enquiry'));
    }

    public function updateStatus(Enquiry $enquiry)
    {
        $enquiry->update([
            'status' => !$enquiry->status,
        ]);
        alert('Enquiry updated successfully');
        return back();
    }

   
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        Alert::success('Enquiry message deleted successfully');
        return back();
    }

    public function deleteNotification(Enquiry $enquiry)
    {
        $enquiry->update([
            'notificable_id' => !$enquiry->notificable_d
        ]);
        return back();
    }

    public function readAllNotification()
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return back();
    }
  
}
