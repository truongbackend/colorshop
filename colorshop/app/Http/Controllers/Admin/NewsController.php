<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news= News::paginate(10);
        return view('Admin/new/show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            // Lưu ảnh vào disk 'public'
            $path = $request->image->store('/', 'public');

            // Đổi tên ảnh thành Timestamp hiện tại để tránh trùng tên
            $newFilename = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('public')->move($path, 'images/' . $newFilename);

            // Resize ảnh để giảm dung lượng
            $image = Image::make(public_path('storage/images/' . $newFilename));
            $image->fit(300, 300)->save();

            // Lưu đường dẫn ảnh vào database
            $requestData['image'] = 'images/' . $newFilename;
        }
        News::create([...$request->all(),'image'=>$newFilename]);
        return redirect('admin/news')->with('success', 'Thêm sản phẩm mới thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.new.index', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.new.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        if (is_null( $news)) {
            return redirect()->back()->with('Failed', 'Không tồn tại');
        } else {
            $news->update($request->all());
            return redirect('admin/news');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if (is_null($news)) {
            return back();
        } else {
            $news->delete();
            return back();
        }
    }
}
