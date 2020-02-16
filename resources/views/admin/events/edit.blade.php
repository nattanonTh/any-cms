@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('event.edit', ['event' => $event]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">แก้ไขกิจกรรม</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="name">ชื่อกิจกรรม</label>
                                <input type="text" id="event_name" name="event_name" class="form-control @error('event_name') is-invalid @enderror" value="{!! $event->event_name !!}" placeholder="Event Name" required>
                                @error('event_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">ตารางกิจกรรม</label>
                                <textarea name="event_schedule" id="event_schedule" class="form-control @error('event_schedule') is-invalid @enderror" placeholder="Schedule" cols="30" rows="10" required>{!! $event->event_schedule !!}</textarea>
                                @error('event_schedule')
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
            <div class="row">
                <div class="col-md-10 offset-1">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-{!! config('any_cms.theme-btn') !!} float-right">
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        $(function() {

        })
    </script>
@endsection
