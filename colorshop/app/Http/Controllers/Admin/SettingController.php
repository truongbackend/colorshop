<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('logo')||($request->hasFile('photo') )) {
            // Lưu ảnh vào disk 'public'
            $path = $request->logo->store('/', 'public');
            $path = $request->photo->store('/', 'public');

            // Đổi tên ảnh thành Timestamp hiện tại để tránh trùng tên
            $newFilename = time() . '.' . $request->photo->getClientOriginalExtension();
            $newFilename = time() . '.' . $request->logo->getClientOriginalExtension();
            Storage::disk('public')->move($path, 'images/' . $newFilename);
            // Storage::disk('public')->move($path, 'images/' . $newFilename);
            // Resize ảnh để giảm dung lượng
            $image = Image::make(public_path('storage/images/' . $newFilename));
            $image->fit(300, 300)->save();

            // Lưu đường dẫn ảnh vào database
            $requestData['image'] = 'images/' . $newFilename;
        }
        Setting::create([...$request->all(),'photo','logo'=>$newFilename]);
        return redirect('admin/setting/create')->with('success', 'Thêm sản phẩm mới thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
