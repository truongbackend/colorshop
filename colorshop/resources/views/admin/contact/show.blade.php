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
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Phản hồi</th>
                        <th>Ngày gửi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contact as $contacts )
                        <tr>
                            <td>{{ $contacts->id }}</td>
                            <td>{{ $contacts->name }}</td>
                            <td>{{ $contacts->phone }}</td>
                            <td>{{ $contacts->message }}</td>
                            <td>{{ $contacts->created_at }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="{{ $contact->previousPageUrl() }}">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $contact->url(1) }}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $contact->url($contact->currentPage() + 1) }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $contact->url($contact->currentPage() + 2) }}">3</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $contact->nextPageUrl() }}">Next</a></li>
                    </ul>
                </nav>


            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection
