@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('blog.edit', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit Service</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="email">Cover Photo</label>

                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input @error('cover') is-invalid @enderror"
                                           id="cover" name="cover">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div style="width: 100%" class="align-content-center">
                                    <img id="preview" src="{{ asset($blog->image_path) }}" alt="preview  image"
                                         style="
                                             display: block;
                                             margin-left: auto;
                                             margin-right: auto;
                                             width: 50%;
                                         "/>
                                </div>

                                @error('cover')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $blog->title }}" placeholder="Title" required>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                    <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror">{!! $blog->content !!}</textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row pb-lg-5">
                <div class="col-md-10 offset-1">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Submit" class="btn btn-{!! config('any-cms.theme-btn') !!} float-right">
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                placeholder: 'Hello world',
                tabsize: 2,
                height: 400,
                maximumImageFileSize: 5335040,
            });
        });

        $(".custom-file-input").on("change", function() {
            if(this.files[0].size > 5048580){
                alert("Image file is too big.");
                this.value = "";
            } else {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                previewImage('#preview', this);
            }
        });
    </script>
@endsection
