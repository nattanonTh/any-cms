@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Member details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img class="img-responsive img-rounded" style="max-width: 300px;" src="{!! $member->image !!}" alt="User profile picture">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->name !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Surname : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->surname !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Age : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->age !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Gender : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->sex !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">ID Card : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->id_card !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Mobile no : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->mobile_no !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Address : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->address !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Social id : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->social_id !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Emergency contact name : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->emergency_contact_name !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Emergency contact mobile  : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->emergency_contact_mobile !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Emergency contact relation : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->emergency_contact_relation !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Congenital disease : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->congenital_disease !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Status : </label>

                                            <div class="col-sm-10">
                                                @if($member->status == 'None')
                                                    <span class="badge badge-secondary">None</span>
                                                @elseif ($member->status == 'Good')
                                                    <span class="badge badge-success">Good</span>
                                                @elseif ($member->status == 'Normal')
                                                    <span class="badge badge-warning">Normal</span>
                                                @elseif ($member->status == 'Bad')
                                                    <span class="badge badge-danger">Bad</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Created at </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->created_at !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Updated at : </label>

                                            <div class="col-sm-10">
                                                <p>{!! $member->updated_at !!}</p>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Attend events</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse" >
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#add-attention">
                                        Add new attention
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-hover" id="datatable-attention" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Event name</th>
                                            <th>Start date</th>
                                            <th>Attend date</th>
                                            <th>End date</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($member->attention as $attention)
                                            <tr>
                                                <td><a target="_blank" href="{{ route('event.edit', $attention->event->id) }}">{{ $attention->event->event_name }}</a></td>
                                                <td>{{ $attention->attend_start->format('Y-m-d') }}</td>
                                                <td>{{ $attention->attend_date }}</td>
                                                <td>{{ $attention->attend_end->format('Y-m-d') }}</td>
                                                <td>{{ $attention->created_at }}</td>
                                                <td>
                                                    <a target="_blank" href="{{ route('event.print-attention', ['attention' => $attention->id]) }}" class="btn btn-sm btn-primary">Print</a>
                                                    <a href="{{ route('event.delete-attention', ['attention' => $attention->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-lg-5">
                <div class="col-md-10 offset-1">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
    </section>

    <div class="modal fade" id="add-attention" tabindex="" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('event.add-attention', ['member' => $member]) }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attend event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Event name</label>
                            <select name="event_id" class="form-control">
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Start date</label>
                            <input type="text"
                                   id="start_date"
                                   name="start_date"
                                   class="form-control date @error('start_date') is-invalid @enderror"
                                   value="{{ $date }}"
                                   placeholder="Start date"
                                   data-inputmask-alias="datetime"
                                   data-inputmask-inputformat="dd/mm/yyyy"
                                   data-mask
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="">Attend date</label>
                            <input type="number" class="form-control" name="attend_date" min="1" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

        })
    </script>
@endsection
