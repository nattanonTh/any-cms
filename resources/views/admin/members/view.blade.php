@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลสมาชิก</h3>
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
                                            <label for="inputName" class="col-sm-4 control-label">ชื่อ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->name !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">นามสกุล : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->surname !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">อายุ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->age !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">วันเกิด : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->birth_date->format('d/m/Y') !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">เพศ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->sex !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">รหัสบัตรประชาชน : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->id_card !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">เบอร์โทรติดต่อ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->mobile_no !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">ที่อยู่ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->address !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">Social id : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->social_id !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->emergency_contact_name !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">เบอร์โทรติดต่อ  : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->emergency_contact_mobile !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">เกี่ยวข้องเป็น : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->emergency_contact_relation !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">อาการแพ้ หรือ ข้อมูลเพิ่มเติม : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->congenital_disease !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">สถานะ : </label>

                                            <div class="col-sm-8">
                                                @if($member->status == 'ไม่มี')
                                                    <span class="badge badge-secondary">-</span>
                                                @elseif ($member->status == 'ดี')
                                                    <span class="badge badge-success">ดี</span>
                                                @elseif ($member->status == 'ปกติ')
                                                    <span class="badge badge-warning">ปกติ</span>
                                                @elseif ($member->status == 'ปรับปรุง')
                                                    <span class="badge badge-danger">ปรับปรุง</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">เพิ่มข้อมูลเมื่อ : </label>

                                            <div class="col-sm-8">
                                                <p>{!! $member->created_at !!}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-4 control-label">อัพเดตข้อมูลเมื่อ : </label>

                                            <div class="col-sm-8">
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
                                        เข้าร่วมกิจกรรม
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table table-hover" id="datatable-attention" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ชื่อกิจกรรม</th>
                                            <th>วันที่เข้าเริ่มเข้าร่วม</th>
                                            <th>จำนวนวันที่เข้าร่วม</th>
                                            <th>สิ้นสุดวันที่</th>
                                            <th>เพิ่มข้อมูลเมื่อ</th>
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
                        <h5 class="modal-title" id="exampleModalLabel">เข้าร่วมกิจกรรม</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">ชื่อกิจกรรม</label>
                            <select name="event_id" class="form-control">
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">วันที่เริ่มเข้าร่วม</label>
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
                            <label for="">จำนวนวันที่เข้าร่่วม</label>
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
