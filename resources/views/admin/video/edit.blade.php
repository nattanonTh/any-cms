@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('video.edit', $video->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit Video</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="email">Video</label>

                                <textarea name="link"  class="form-control @error('link') is-invalid @enderror" cols="30" rows="10">{!! $video->link !!}</textarea>


                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $video->name }}" placeholder="name">
                                @error('name')
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
