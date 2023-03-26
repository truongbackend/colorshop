<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $voucher = Voucher::orderBy('created_at', 'desc')->paginate(10);
        return response(view('admin.voucher.show',compact('voucher')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response(view('admin.voucher. index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Voucher::create($request->all());

        return redirect('admin/voucher');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher): Response
    {
        return response(view('admin.voucher.edit',compact('voucher')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher): RedirectResponse
    {
        if (is_null( $voucher)) {
            return redirect()->back()->with('Failed', 'Không tồn tại');
        } else {
            $voucher->update($request->all());
            return redirect('admin/voucher');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voucher $voucher): RedirectResponse
    {
        if (is_null($voucher)) {
            return back();
        } else {
            $voucher->delete();
            return back();
        }
    }
}
