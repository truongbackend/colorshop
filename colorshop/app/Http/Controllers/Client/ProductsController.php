<?php

namespace App\Http\Controllers\Client;

use App\Models\Banner;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(10);
        return view('client.product.product', compact('products'));
    }
    public function show($id)
    {

        $products = Products::findOrFail($id);
        return view('client.product.product-details', compact('products'));
    }
    // public function banner()
    // {
    //     $banner = Banner::all();
    //     // dd($banner);
    //     return view('client.index',compact('banner'));
    // }
    // public function blog()
    // {
    //     $blog = News::all();
    //     // dd($banner);
    //     return view('client.index',compact('blog'));
    // }


}
?>
