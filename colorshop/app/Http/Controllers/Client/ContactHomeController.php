<?php

namespace App\Http\Controllers\Client;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::limit(1)->get();
        return view('client.contact')
                ->with('setting',$setting);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($request->all());

        return redirect('contact')->with('success', 'Chúc mừng bạn gửi phản hồi thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
