<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()->orderBy('id','DESC')->paginate(15);
        return view('admin/contact/index');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->fullname = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone_number;
        $contact->subject = $request->msg_subject;
        $contact->message = $request->message;
        $contact->status=true;

        $contact->save();

        return redirect('/contact');
    }
}
