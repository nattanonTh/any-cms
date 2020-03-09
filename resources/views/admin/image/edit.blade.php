@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('image.edit', $image->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add Image</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="email">Photo</label>

                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input @error('path') is-invalid @enderror"
                                           id="path" name="path">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div style="width: 100%" class="align-content-center">
                                    <img id="preview" src="{{ asset($image->path) }}" alt="preview  image"
                                         style="
                                             display: block;
                                             margin-left: auto;
                                             margin-right: auto;
                                             width: 50%;
                                         "/>
                                </div>

                                @error('path')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if($tags->count() > 0)
                                <div class="form-group">
                                    <label for="email">Tag name</label>
                                    <select name="tags_id" id="tags_id" class="form-control @error('tags_id') is-invalid @enderror">
                                        <option value="">No tag</option>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}" @if($image->tags_id == $tag->id) selected @endif>{{ $tag->tag_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
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

