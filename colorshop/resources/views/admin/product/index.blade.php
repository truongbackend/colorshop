@extends('admin.layout')
@section('content')
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Thêm sản phẩm</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                                        <h4 class="card-title">Thêm sản phẩm</h4>
                                        <form action="{{ route ('products.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Tên sản phẩm</label>
                                                        <input id="productname" name="name" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="manufacturerbrand">Giá</label>
                                                        <input id="manufacturerbrand" name="price" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Giảm giá</label>
                                                        <input id="price" name="discount" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Trạng thái</label>

                                                        <select name="status"class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                            <option value="1">Bật</option>
                                                            <option value="0">Tắt</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="productdesc">Chi tiết</label>
                                                        <textarea name="detail" class="form-control" id="productdesc" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <h4 class="card-title mb-3">Product Images</h4>
                                                        <div class="form-group">
                                                            <div class="fallback">
                                                                <input name="image" type="file" multiple="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Loại hàng</label>
                                                        <select name="category_id" class="select2 form-control select2-multiple">
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                                            <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                                        </form>
                                    </div>
                                </div> <!-- end card-->
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                <!-- End Page-content -->
@endsection
