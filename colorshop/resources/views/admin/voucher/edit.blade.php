@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Thêm mã giảm giá</h4>
                <form action="{{ route ('voucher.update',$voucher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item="" class="outer">
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Tiêu đề</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="{{ $voucher->name }}" name="name" type="text" class="form-control" placeholder="Tiêu đề của bài...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Số lượng</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="{{ $voucher->maximum }}" name="maximum" type="number" class="form-control" placeholder="Số lượng...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Thời gian</label>
                                <div class="col-md-10">
                                    <input class="form-control" value="{{ $voucher->expiry_period }}" name="expiry_period" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-lg-2">Task Description</label>
                                <div class="col-lg-10">
                                    <textarea name="description" class="form-control summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Mã giảm giá code</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="voucher_code" value="{{ $voucher->voucher_code }}" type="text" class="form-control" placeholder="Mã giảm giá ví dụ: abv22...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Mã giảm giá</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="voucher_price" value="{{ $voucher->voucher_price }}" type="text" class="form-control" placeholder="Mã giảm giá ...">
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
