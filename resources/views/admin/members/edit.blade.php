@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('member.edit', ['member' => $member]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">แก้ไขสมาชิกใหม่ : {!! $member->name !!}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{!! $member->name !!}" placeholder="Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">นามสกุล</label>
                                <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{!! $member->surname !!}" placeholder="Surname" required>
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">อายุ</label>
                                <input type="number" id="age" name="age" class="form-control @error('age') is-invalid @enderror" value="{{$member->age}}" placeholder="Age" required min="1">
                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">เพศ</label>
                                <select name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror">
                                    <option value="ชาย" @if($member->sex == 'ชาย') selected @endif>ชาย</option>
                                    <option value="หญิง" @if($member->sex == 'หญิง') selected @endif>หญิง</option>
                                    <option value="พระ" @if($member->sex == 'พระ') selected @endif>พระ</option>
                                    <option value="เณร" @if($member->sex == 'เณร') selected @endif>เณร</option>
                                </select>
                                @error('sex')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_card">รหัสบัตรประชาชน</label>
                                <input type="text" id="id_card" name="id_card" class="form-control @error('id_card') is-invalid @enderror" value="{!! $member->id_card !!}" placeholder="ID Card" required>
                                @error('id_card')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birth_date">วันเกิด</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text"
                                           id="birth_date"
                                           name="birth_date"
                                           class="form-control @error('birth_date') is-invalid @enderror"
                                           value="{!! date_ui($member->birth_date->format('Y-m-d')) !!}"
                                           placeholder="Birth date"
                                           data-inputmask-alias="datetime"
                                           data-inputmask-inputformat="dd/mm/yyyy"
                                           data-mask
                                           required>
                                </div>
                                @error('birth_date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mobile_no">เบอร์โทรติดต่อ</label>
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="{!! $member->mobile_no !!}" placeholder="Tel" required>
                                @error('mobile_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">ที่อยู่</label>
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" cols="30" rows="5">{!! $member->address !!}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="social_id">Social id</label>
                                <input type="text" id="social_id" name="social_id" class="form-control @error('social_id') is-invalid @enderror" value="{!! $member->social_id !!}" placeholder="Social id" required>
                                @error('social_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_name">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน</label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name" class="form-control @error('emergency_contact_name') is-invalid @enderror" value="{!! $member->emergency_contact_name !!}" placeholder="Contact person in case of emergency" required>
                                @error('emergency_contact_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_mobile">เบอร์โทรติดต่อ</label>
                                <input type="text" id="emergency_contact_mobile" name="emergency_contact_mobile" class="form-control @error('emergency_contact_mobile') is-invalid @enderror" value="{!! $member->emergency_contact_mobile !!}" placeholder="Mobile" required>
                                @error('emergency_contact_mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_relation">เกี่ยวข้องเป็น</label>
                                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" class="form-control @error('emergency_contact_relation') is-invalid @enderror" value="{!! $member->emergency_contact_relation !!}" placeholder="Relation to member" required>
                                @error('emergency_contact_relation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="congenital_disease">อาการแพ้ หรือ ข้อมูลเพิ่มเติม</label>
                                <textarea name="congenital_disease" id="congenital_disease" class="form-control @error('congenital_disease') is-invalid @enderror" placeholder="Congenital disease or required information" cols="30" rows="5">{!! $member->congenital_disease !!}</textarea>
                                @error('congenital_disease')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="profile" class="preview">รูปภาพ</label>
                                <input type="file" id="file" name="file" class="form-control">
                                <input type="hidden" id="image" name="image" class="form-control">
                                {{--                                <div id="profile_webcam"></div>--}}
                                {{--                                <input type=button value="Take Snapshot" id="snap">--}}
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <div id="results">
                                    <img src="{!! $member->image !!}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="ไม่มี" @if($member->status == 'ไม่มี') selected @endif>ไม่มี</option>
                                    <option value="ดี" @if($member->status == 'ดี') selected @endif>ดี</option>
                                    <option value="ปกติ" @if($member->status == 'ปกติ') selected @endif>ปกติ</option>
                                    <option value="ปรับปรุง" @if($member->status == 'ปรับปรุง') selected @endif>ปรับปรุง</option>
                                </select>
                                @error('status')
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
            $('#birth_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

            $('#status').val('{!! $member->status !!}');

            // Webcam.set({
            //     width: 900,
            //     height: 540,
            //     image_format: 'jpeg',
            //     jpeg_quality: 90
            // });
            // Webcam.attach( '#profile_webcam' );
            //
            // $('#snap').click(function () {
            //     Webcam.snap( function(data_uri) {
            //         document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
            //         $('#image').val(data_uri);
            //     } );
            // });

            $("#file").on("change", function() {
                if(this.files[0].size > 5048580){
                    alert("Image file is too big.");
                    this.value = "";
                } else {
                    document.getElementById('results').innerHTML = '<img id="preview" src=""/>';
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#image').val(e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);

                    previewImage('#preview', this);
                }
            });
        })
    </script>
@endsection
