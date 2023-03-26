@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Cập nhật tin</h4>
                <form action="{{ route ('news.update',$news->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Tiêu đề</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="title" value="{{ $news->title }}" type="text" class="form-control" placeholder="Tiêu đề của bài...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Type</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="type" value="{{ $news->type }}" type="text" class="form-control" placeholder="Tiêu đề của bài...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Name</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="name" value="{{ $news->name }}" type="text" class="form-control" placeholder="Tiêu đề của bài...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Task Description</label>
                                <div class="col-lg-10">
                                    <textarea name="detail" value="{{ $news->detail }}" class="form-control summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Chế độ</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select2" name="status">
                                            <option value="0">Bật</option>
                                            <option value="1">Tắt</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="inner-repeater mb-4">
                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                    <label class="col-form-label col-lg-2">Hình ảnh</label>
                                    <div data-repeater-item="" class="inner col-lg-10 ml-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-4">
                                                <div class="mt-4 mt-md-0">
                                                    <input name="image" type="file" class="form-control-file">
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
