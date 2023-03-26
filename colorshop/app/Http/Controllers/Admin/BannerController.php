<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $banner = Banner::orderBy('created_at', 'desc')->paginate(10);
        return response(view('admin.banner.show',compact('banner')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response(view('admin.banner.index'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            // Lưu ảnh vào disk 'public'
            $path = $request->image->store('/', 'public');

            // Đổi tên ảnh thành Timestamp hiện tại để tránh trùng tên
            $newFilename = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('public')->move($path, 'images/' . $newFilename);

            // Resize ảnh để giảm dung lượng
            $image = Image::make(public_path('storage/images/' . $newFilename));
            $image->fit(1430, 600)->save();

            // Lưu đường dẫn ảnh vào database
            $requestData['image'] = 'images/' . $newFilename;
        }
        Banner::create([...$request->all(),'image'=>$newFilename]);
        return redirect('admin/banner')->with('success', 'Thêm sản phẩm mới thành công.');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(Banner $banner): Response
    {
        return response(view('admin.banner.index'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(Banner $banner): Response
    {
        return response(view('admin.banner.edit',compact('banner')));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Banner $banner): RedirectResponse
    {
        if (is_null( $banner)) {
            return redirect()->back()->with('Failed', 'Không tồn tại');
        } else {
            $banner->update($request->all());
            return redirect('admin/banner');
        }
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Banner $banner): RedirectResponse
    {
        if (is_null($banner)) {
            return back();
        } else {
            $banner->delete();
            return back();
        }
    }
}
