@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Danh sách liên hệ</h4>
                <p class="card-title-desc">Danh sách liên hệ</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Số lượng</th>
                        <th>Mã giảm giá</th>
                        <th>Ngày hết hạn</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Cập nhật</th>
                        <th>Xoá</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($voucher as $vouchers )
                        <tr>
                            <td>{{ $vouchers->id }}</td>
                            <td>{{ $vouchers->name }}</td>
                            <td>{{ $vouchers->maximum }}</td>
                            <td>{{ $vouchers->voucher_code }}</td>
                            <td>{{ $vouchers->expiry_period }}</td>
                            <td>{{ $vouchers->created_at }}</td>
                            <td>{{ $vouchers->updated_at }}</td>
                            <td><a href="{{ route ('voucher.edit' ,$vouchers->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Edit
                                </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route ('voucher.destroy',$vouchers->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger waves-effect waves-light w-sm">
                                    <i class="mdi mdi-trash-can d-block font-size-16"></i> Delete
                                    </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="{{ $voucher->previousPageUrl() }}">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $voucher->url(1) }}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $voucher->url($voucher->currentPage() + 1) }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $voucher->url($voucher->currentPage() + 2) }}">3</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $voucher->nextPageUrl() }}">Next</a></li>
                    </ul>
                </nav>


            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
