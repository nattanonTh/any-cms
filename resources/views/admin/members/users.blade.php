@extends('layouts.admin.admin-layout')

@section('content')
<section class="content pt-lg-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Active members</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('member.create') }}" class="btn btn-{!! config('any-cms.theme-btn') !!}">Add member</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-users" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>ID Card</th>
                            <th>Tel</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#datatable-members').DataTable({
                processing: true,
                ordering: false,
                serverSide: true,
                ajax: "{{ route('member.list') }}",
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'surname', name: 'surname' },
                    { data: 'id_card', name: 'id_card' },
                    { data: 'mobile_no', name: 'mobile_no' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'status', name: 'status' },
                    { data: 'id', name: 'id' },
                ],
                "columnDefs": [{
                    "targets": 6,
                    "render": function (data, type, row, meta) {
                        return `@include("layouts.admin.data-table-button-group", [
                            'edit' => "`+ row.edit_link +`",
                            'view' => false,
                            'delete' => "`+ row.delete_link +`",
                        ])`;
                    }
                },{
                    "targets": 5,
                    "render": function (data, type, row, meta) {
                        if (row.status == 'None') {
                            return '<span class="badge badge-secondary">None</span>';
                        } else if (row.status == 'Good') {
                            return '<span class="badge badge-success">Good</span>';
                        } else if (row.status == 'Normal') {
                            return '<span class="badge badge-warning">Normal</span>';
                        } else if (row.status == 'Bad') {
                            return '<span class="badge badge-danger">Bad</span>';
                        }
                    }
                }],
            });
        });
    </script>
@endsection
