@extends('admin.layout')
@section('content')
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Customers</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Customers</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <div class="search-box mr-2 mb-2 d-inline-block">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <i class="bx bx-search-alt search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> Thêm mới</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Hình ảnh</th>
                                                        <th>Họ và tên</th>
                                                        <th>Số điện thoại / Email</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Ngày đăng kí</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user as $users)
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><img src="{{ Storage::url('images/' .$users->image) }}" class="d-flex mr-3 rounded-circle" width="100px" height="100px" alt="Product Image"></td>
                                                        <td>{{ $users->name }}</td>
                                                        <td>
                                                            <p class="mb-1">{{ $users->phone }}</p>
                                                            <p class="mb-0">{{ $users->email }}</p>
                                                        </td>

                                                        <td>{{ $users->street_address }}</td>
                                                        <td>{{ $users->created_at }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success mr-1"></i> Edit</a></li>
                                                                    <li><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger mr-1"></i> Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
@endsection
