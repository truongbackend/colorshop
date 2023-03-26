<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets\images\favicon.ico')}}">
        <!-- select2 css -->
        <link rel="stylesheet" href="{{ asset('assets\libs\select2\css\select2.min.css')}}">
        <!-- dropzone css -->
        <link rel="stylesheet" href="{{ asset('assets\libs\dropzone\min\dropzone.min.css')}}">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.min.css')}}">
        <!-- Icons Css -->
        <link rel="stylesheet" href="{{ asset('assets\css\icons.min.css')}}">
        <!-- App Css-->
        <link rel="stylesheet" href="{{ asset('assets\css\app.min.css') }}">
        <link href="{{ asset('assets\libs\bootstrap-datepicker\css\bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets\libs\summernote\summernote-bs4.min.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets\images\logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets\images\logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets\images\logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets\images\logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar="" style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets\images\users\avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets\images\users\avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if (Auth::check() )
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ Auth::user()->image}}" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">
                                    <span class="d-none d-xl-inline-block ml-1">
                                        {{ Auth::user()->name }}
                                    </span>
                                </span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item text-danger" href="#">

                                <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar="" class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-table"></i>
                                    <span>Loại Hàng</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/categories/create') }}">Thêm mới</a></li>
                                    <li><a href="{{ url('admin/categories') }}">Danh sách</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxl-product-hunt"></i>
                                    <span>Sản phẩm</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ url('admin/products/create') }}">Thêm mới</a></li>
                                        <li><a href="{{ url('admin/products') }}">Danh sách</a></li>
                                    </ul>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span>Tin tức</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/news/create')}}">Thêm tin</a></li>
                                    <li><a href="{{ url('admin/news') }}">Danh sách</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-images"></i>
                                    <span>Banner</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/banner/create') }}">Thêm tin</a></li>
                                    <li><a href="{{ url('admin/banner') }}">Danh sách</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span>Đơn hàng</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html">Danh sách</a></li>
                                    <li><a href="invoices-detail.html">Chi tiết</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-news"></i>
                                    <span>Mã giảm giá</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('voucher.create') }}">Thêm mã</a></li>
                                    <li><a href="{{ route('voucher.index') }}">Danh sách</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-comment-dots"></i>
                                    <span>Bình luận</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html">Danh sách</a></li>
                                    <li><a href="contacts-list.html">User List</a></li>
                                    <li><a href="contacts-profile.html">Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span>Liên hệ</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('contact.index')}}">Danh sách</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span>Khách hàng</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="auth-lock-screen.html">Thêm khách</a></li>
                                    <li><a href="{{ route('users.index') }}">Danh sách</a></li>
                                    <li><a href="auth-lock-screen.html">Hồ sơ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span>Setting</span>
                                </a>
                                <ul class="sub-menu mm-collapse" aria-expanded="false">
                                    <li><a href="{{ route('setting.create') }}">Setting</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="container">
                            @yield('content')
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Quang Trường.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar="" class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets\images\layouts\layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets\images\layouts\layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets\images\layouts\layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets\libs\jquery\jquery.min.js') }}"></script>
        <script src="{{ asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{ asset('assets\libs\node-waves\waves.min.js')}}"></script>
        <!-- select 2 plugin -->
        <script src="{{ asset('assets\libs\select2\js\select2.min.js')}}"></script>
        <!-- dropzone plugin -->
        <script src="{{ asset('assets\libs\dropzone\min\dropzone.min.js')}}"></script>
        <!-- init js -->
        <script src="{{ asset('assets\js\pages\ecommerce-select2.init.js')}}"></script>
        <!-- App js -->
        <script src="{{ asset('assets\js\app.js')}}"></script>
        <script src="{{ asset('assets\js\custom.js')}}"></script>
        <script src="{{ asset('assets\libs\jquery.repeater\jquery.repeater.min.js')}}"></script>

        <script src="{{ asset('assets\js\pages\task-create.init.js')}}"></script>

        <script src="{{ asset('assets\js\app.js')}}"></script>
        <script src="{{ asset('assets\libs\summernote\summernote-bs4.min.js')}}"></script>
        <script src="{{ asset('assets\libs\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('assets\libs\summernote\summernote-bs4.min.js')}}"></script>

        <!-- form repeater js -->
        <script src="{{ asset('assets\libs\jquery.repeater\jquery.repeater.min.js')}}"></script>

        <script src="{{ asset('assets\js\pages\task-create.init.js')}}"></script>

        <script src="{{ asset('assets\js\app.js')}}"></script>
    </body>
</html>
