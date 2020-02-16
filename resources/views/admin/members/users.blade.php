@extends('layouts.admin.admin-layout')

@section('content')
<section class="content pt-lg-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">สมาชิก</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('member.create') }}" class="btn btn-{!! config('any_cms.theme-btn') !!}">เพิ่มสมาชิก</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-members" width="100%">
                        <thead>
                        <tr>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>รหัสบัตรประชาชน</th>
                            <th>เบอร์ติืดต่อ</th>
                            <th>วันที่เพิ่มข้อมูล</th>
                            <th>สถานะ</th>
                            <th></th>
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
                            'view' => "`+ row.view_link +`",
                            'delete' => "`+ row.delete_link +`",
                        ])`;
                    }
                },{
                    "targets": 5,
                    "render": function (data, type, row, meta) {
                        if (row.status == 'ไม่มี') {
                            return '<span class="badge badge-secondary">-</span>';
                        } else if (row.status == 'ดี') {
                            return '<span class="badge badge-success">ดี</span>';
                        } else if (row.status == 'ปกติ') {
                            return '<span class="badge badge-warning">ปกติ</span>';
                        } else if (row.status == 'ปรับปรุง') {
                            return '<span class="badge badge-danger">ปรับปรุง</span>';
                        }
                    }
                }],
            });
        });
    </script>
@endsection
