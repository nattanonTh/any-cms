@extends('layouts.admin.admin-layout')

@section('style')
    <style>
        .preview-image {
            max-height: 200px;
            max-width: 150px;
        }

        .width-500 {
            width: 500px!important;
        }
    </style>
@endsection

@section('content')
<section class="content pt-lg-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Banner</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('banner.create') }}" class="btn btn-{!! config('any-cms.theme-btn') !!}">Add Banner</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-promotion" width="100%" style="table-layout: fixed;">
                        <thead>
                        <tr>
                            <th width="30%">Banner</th>
                            <th width="20%">link</th>
                            <th>Created At</th>
                            <th width="30%">Action</th>
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
            $('#datatable-promotion').DataTable({
                processing: true,
                ordering: false,
                serverSide: true,
                ajax: '{{ route('banner.list') }}',
                columns: [
                    { data: 'image_path', name: 'image_path' },
                    { data: 'link', name: 'link' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'id', name: 'id' },
                ],
                'columnDefs': [
                    {
                        'render': function (data, type, row, meta) {
                            return `@include("layouts.admin.data-table-button-group", [
                                'edit' => "`+ row.edit_link +`",
                                'view' => false,
                                'delete' => "`+ row.delete_link +`",
                            ])`;
                        },
                        'targets': 3,
                    },
                    {
                        'targets': 1,
                        'render': function (data, type, row, meta) {
                            return '<a target="_blank" href="' + row.link + '">' + row.link + '</a>';
                        },
                    },
                    {
                        'targets': 0,
                        'render': function (data, type, row, meta) {
                            return '<img class="image preview-image" src="' + row.image_path + '">';
                        },
                    },
                ],
            });
        });
    </script>
@endsection
