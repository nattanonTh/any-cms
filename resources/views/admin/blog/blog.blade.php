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
                            <h3 class="card-title">Blogs</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('blog.create') }}" class="btn btn-{!! config('any-cms.theme-btn') !!}">Add blog</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-hover" id="datatable-users" width="100%" style="table-layout: fixed;">
                        <thead>
                        <tr>
                            <th width="30%">Title</th>
                            <th width="20%">Banner</th>
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
            $('#datatable-users').DataTable({
                processing: true,
                ordering: false,
                serverSide: true,
                ajax: '{{ route('blog.list') }}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'image_path', name: 'image_path' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'id', name: 'id' },
                ],
                'columnDefs': [
                    {
                        'render': function (data, type, row, meta) {
                            return `@include("layouts.admin.data-table-button-group", [
                                'edit' => "`+ row.edit_link +`",
                                'view' => "`+ row.view_link +`",
                                'delete' => "`+ row.delete_link +`",
                            ])`;
                        },
                        'targets': 3,
                    },
                    {
                        'targets': 1,
                        'render': function (data, type, row, meta) {
                            return '<img class="image preview-image" src="' + row.image_path + '">';
                        },
                    }
                ],
            });
        });
    </script>
@endsection
