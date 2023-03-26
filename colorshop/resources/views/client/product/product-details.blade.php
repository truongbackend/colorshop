@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/single_responsive.css')}}">
<style>
    .add_to_cart_button {
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: auto;
        height: 40px;
        background: #fe4c50;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<script src="{{ asset('js/single_custom.js')}}"></script>
<div class="container single_product_container">
    <div class="row">
        <div class="col">
            <!-- Breadcrumbs -->
            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="single_product_pics">
                <div class="row">
                    <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                        <div class="single_product_thumbnails">
                            <ul>
                                <li><img src="images/single_1_thumb.jpg" alt="" data-image="images/single_1.jpg"></li>
                                <li class="active"><img src="images/single_2_thumb.jpg" alt="" data-image="images/single_2.jpg"></li>
                                <li><img src="images/single_3_thumb.jpg" alt="" data-image="images/single_3.jpg"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 image_col order-lg-2 order-1">
                        <div class="single_product_image">
                            <img src="{{ Storage::url('images/' . $products->image) }}" alt="" class="single_product_image_background">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2>{{ $products->name }}</h2>
                    <p>{{ $products->detail }}</p>
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <span class="ti-truck"></span><span>free delivery</span>
                </div>
                <div class="original_price">{{ $products->discount }}</div>
                <div class="product_price">{{ $products->price }}</div>
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Quantity:</span>
                    <div class="quantity_selector">
                        <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                        <span id="quantity_value">1</span>
                        <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                    <div class="add_to_cart_button"><a href="#">add to cart</a></div>
                    <div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{ asset('js/contact_custom.js')}}"></script>
<script src="{{ asset('js/categories_custom.js')}}"></script>
@endsection
