@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Danh sách loại hàng</h4>
                <p class="card-title-desc">Danh sách loại hàng
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên loại</th>
                        <th>Trạng thái</th>
                        <th>Chỉnh sửa</th>
                        <th>Xoá</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $categories )
                        <tr>
                            <td>{{ $categories->id }}</td>
                            <td>{{ $categories->name }}</td>
                            <td>{{ $categories->status }}</td>
                            <td><a href="{{ route ('categories.edit' ,$categories->id) }}">
                                <button type="button" class="btn btn-success waves-effect waves-light w-sm">
                                <i class="mdi mdi-pencil d-block font-size-16"></i> Edit
                                </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route ('categories.destroy',$categories->id) }}" method="POST">
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
                    {{-- {{ $category->links() }} --}}
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item"><a class="page-link" href="{{ $category->previousPageUrl() }}">Previous</a></li>
                      <li class="page-item {{ $category->currentPage() == 1 ? 'active' : '' }}"><a class="page-link" href="{{ $category->previousPageUrl() }}">1</a></li>
                      <li class="page-item {{ $category->currentPage() == 2 ? 'active' : '' }}"><a class="page-link" href="{{ $category->url(2) }}">2</a></li>
                      <li class="page-item {{ $category->currentPage() == 3 ? 'active' : '' }}"><a class="page-link" href="{{ $category->url(3) }}">3</a></li>
                      <li class="page-item"><a class="page-link" href="{{ $category->nextPageUrl() }}">Next</a></li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
