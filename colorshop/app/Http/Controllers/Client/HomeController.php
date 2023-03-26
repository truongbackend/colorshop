<?php

namespace App\Http\Controllers\Client;

use App\Models\News;
use App\Models\Banner;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $new = News::where('status','1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $category = Category::where('status','1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $banner = Banner::where('status','1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $setting = Setting::limit(1)->get();
        $product = Products::where('status','1')->orderBy('created_at', 'DESC')->limit(10)->get();
        $header = Category::where('status','1')->limit(4)->get();
        return view('client.index')
                ->with('new',$new)
                ->with('banner',$banner)
                ->with('setting',$setting)
                ->with('product',$product)
                ->with('category',$category)
                ->with('header',$header);
    }
}
