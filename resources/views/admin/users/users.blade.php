@extends('layouts.admin.admin-layout')

@section('content')
<section class="content pt-lg-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Active users</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('user.create') }}" class="btn btn-{!! config('any-cms.theme-btn') !!}">Add user</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-users" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Role</th>
                            <th>Created At</th>
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
            $('#datatable-users').DataTable({
                processing: true,
                ordering: false,
                serverSide: true,
                ajax: "{{ route('user.list') }}",
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'tel', name: 'tel' },
                    { data: 'role', name: 'role' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'id', name: 'id' },
                ],
                "columnDefs": [{
                    "targets": 5,
                    "render": function (data, type, row, meta) {
                        return `@include("layouts.admin.data-table-button-group", [
                            'edit' => "`+ row.edit_link +`",
                            'view' => false,
                            'delete' => "`+ row.delete_link +`",
                        ])`;
                    }
                }],
            });
        });
    </script>
@endsection
