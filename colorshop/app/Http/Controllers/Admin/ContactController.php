<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $contact = Contact::orderBy('created_at', 'desc')->paginate(10);
        return response(view('admin.contact.show',compact('contact')));
    }

}
