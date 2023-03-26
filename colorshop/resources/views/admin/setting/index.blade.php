@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Setting</h4>
                <form action="{{ route('setting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Địa chỉ</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="address" type="text" class="form-control" placeholder="Địa chỉ...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="email" type="text" class="form-control" placeholder="abc@gmail.com...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Số điện thoại</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="phone" type="text" class="form-control" placeholder="012343365...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Task Description</label>
                                <div class="col-lg-10">
                                    <textarea name="description" class="form-control summernote"></textarea>
                                </div>
                            </div>
                            <div class="inner-repeater mb-4">
                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                    <label class="col-form-label col-lg-2">Logo</label>
                                    <div data-repeater-item="" class="inner col-lg-10 ml-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-4">
                                                <div class="mt-4 mt-md-0">
                                                    <input name="logo" type="file" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                    <label class="col-form-label col-lg-2">Liên hệ</label>
                                    <div data-repeater-item="" class="inner col-lg-10 ml-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-4">
                                                <div class="mt-4 mt-md-0">
                                                    <input name="photo" type="file" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
