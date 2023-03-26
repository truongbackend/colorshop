@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Danh sách loại hàng</h4>
                <p class="card-title-desc">Danh sách loại hàng</p>
                <form action="{{ route('search') }}" method="get">
                    <input type="text" name="q" placeholder="Nhập từ khóa tìm kiếm...">
                    <button type="submit">Tìm kiếm</button>
                </form>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                        <th>Chi tiết</th>
                        <th>Trạng thái</th>
                        <th>Chỉnh sửa</th>
                        <th>Xoá</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($product as $products )
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->discount }}</td>
                            <td>{{ $products->detail }}</td>
                            {{-- <img src="{{ asset('storage/images/5.jpg') }}"> --}}
                            <td><img src="{{ Storage::url('images/' . $products->image) }}" alt="Product Image"></td>
                            <td>{{ $products->status }}</td>
                            <td><input type="checkbox" id="switch1" switch="none" checked/="">
                                @if ($products->status ==1)
                                <label for="switch1" data-on-label="On"></label>
                                @endif
                                <label for="switch1" data-off-label="Off"></label>
                            </td>
                            <td><a href="{{ route ('products.edit' ,$products->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Edit
                                </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route ('products.destroy',$products->id) }}" method="POST">
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

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
