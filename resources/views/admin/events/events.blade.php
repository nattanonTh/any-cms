@extends('layouts.admin.admin-layout')

@section('content')
<section class="content pt-lg-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">กิจกรรม</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('event.create') }}" class="btn btn-{!! config('any_cms.theme-btn') !!}">เพิ่มกิจกรรม</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-events" width="100%">
                        <thead>
                        <tr>
                            <th>ชื่อกิจกรรม</th>
                            <th>เพิ่มข้อมูลเมื่อ</th>
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
            $('#datatable-events').DataTable({
                processing: true,
                ordering: false,
                serverSide: true,
                ajax: "{{ route('event.list') }}",
                columns: [
                    { data: 'event_name', name: 'event_name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'id', name: 'id' },
                ],
                "columnDefs": [{
                    "targets": 2,
                    "render": function (data, type, row, meta) {
                        return `@include("layouts.admin.data-table-button-group", [
                            'edit' => "`+ row.edit_link +`",
                            'view' => false,
                            'delete' => false,
                        ])`;
                    }
                }],
            });
        });
    </script>
@endsection
