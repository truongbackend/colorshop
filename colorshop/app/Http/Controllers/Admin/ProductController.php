<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //show ra
    public function index()
    {
        $product = Products::paginate(10);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    //load form
    public function create()
    {
        $categories = Category::all();
        return view('Admin.product.index',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //xử lý dữ liêu
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
            Products::create([...$request->all(),'image'=>$newFilename]);
            return redirect('admin/products')->with('success', 'Thêm sản phẩm mới thành công.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return view('Admin.product.index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('Admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        if (is_null( $product)) {
            return redirect()->back()->with('Failed', 'Không tồn tại');
        } else {
            $product->update($request->all());
            return redirect('products');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        if (is_null($product)) {
            return back();
        } else {
            $product->delete();
            return back();
        }
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $product = Products::where('name', 'like', '%'.$searchTerm.'%')
                            ->orWhere('discount', 'like', '%'.$searchTerm.'%')
                            ->get();
        return view('admin.search', compact('product'));
    }




}
