@extends('admin.layout')
@section('content')
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Tin tức</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Projects List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 100px">#</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Ngày đăng</th>
                                        <th scope="col">Ngày cập nhật</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $new )
                                    <tr>
                                        <td>{{ $new->id }}</td>
                                        <td><img src="{{ Storage::url('images/' . $new->image) }}" class="d-flex mr-3 rounded-circle" width="100px" height="100px" alt="Product Image"></td>
                                        <td>
                                            <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{ $new->title }}</a></h5>
                                            {{-- <p class="text-muted mb-0">{!! $new->detail !!}</p> --}}
                                        </td>
                                        <td>{{ $new->created_at }}</td>
                                        <td>{{ $new->updated_at }}</td>
                                        <td><span class="badge badge-primary">Completed</span></td>
                                        <td><a href="{{ route ('news.edit' ,$new->id) }}">
                                            <button type="button" class="btn btn-success waves-effect waves-light w-sm">
                                            <i class="mdi mdi-pencil d-block font-size-16"></i> Edit
                                            </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route ('news.destroy',$new->id) }}" method="POST">
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
                                    <li class="page-item"><a class="page-link" href="{{ $news->previousPageUrl() }}">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $news->currentPage() == 1 ? 'active' : '' }}">1</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $news->currentPage() == 2 ? 'active' : '' }}">2</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $news->currentPage() == 3 ? 'active' : '' }}">3</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $news->nextPageUrl() }}">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="text-center my-3">
                        <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
                    </div>
                </div> <!-- end col-->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    <!-- End Page-content -->
@endsection
