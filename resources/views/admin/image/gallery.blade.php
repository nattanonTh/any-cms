@extends('layouts.admin.admin-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gallery</div>
                <div class="card-body">
                    <div id='gallery'>
                        <image-gallery :defaultimage="defaultimage"></image-gallery>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var defaultImage = {!! $imageList->toJson() !!};
</script>
<script src="{{ asset('js/gallery.js') }}"></script>
@endsection
