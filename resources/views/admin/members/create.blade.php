@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('member.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">เพิ่มสมาชิกใหม่</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">นามสกุล</label>
                                <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="" placeholder="Surname" required>
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">อายุ</label>
                                <input type="number" id="age" name="age" class="form-control @error('age') is-invalid @enderror" value="" placeholder="Age" required min="1">
                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">เพศ</label>
                                <select name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror">
                                    <option value="ชาย">ชาย</option>
                                    <option value="หญิง">หญิง</option>
                                    <option value="พระ">พระ</option>
                                    <option value="เณร">เณร</option>
                                </select>
                                @error('sex')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_card">รหัสบัตรประชาชน</label>
                                <input type="text" id="id_card" name="id_card" class="form-control @error('id_card') is-invalid @enderror" value="" placeholder="ID Card" required>
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
                                           value=""
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
                                <label for="mobile_no">เบอร์ติดต่อ</label>
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="" placeholder="Tel" required>
                                @error('mobile_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">ที่อยู่</label>
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" cols="30" rows="5"></textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="social_id">Social id</label>
                                <input type="text" id="social_id" name="social_id" class="form-control @error('social_id') is-invalid @enderror" value="" placeholder="Social id" required>
                                @error('social_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_name">บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน</label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name" class="form-control @error('emergency_contact_name') is-invalid @enderror" value="" placeholder="Contact person in case of emergency" required>
                                @error('emergency_contact_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_mobile">เบอร์โทรติดต่อ</label>
                                <input type="text" id="emergency_contact_mobile" name="emergency_contact_mobile" class="form-control @error('emergency_contact_mobile') is-invalid @enderror" value="" placeholder="Mobile" required>
                                @error('emergency_contact_mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_relation">เกี่ยวข้องเป็น</label>
                                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" class="form-control @error('emergency_contact_relation') is-invalid @enderror" value="" placeholder="Relation to member" required>
                                @error('emergency_contact_relation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="congenital_disease">อาการแพ้ หรือ ข้อมูลเพิ่มเติม</label>
                                <textarea name="congenital_disease" id="congenital_disease" class="form-control @error('congenital_disease') is-invalid @enderror" placeholder="Congenital disease or required information" cols="30" rows="5"></textarea>
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
                                <div id="results"></div>
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
                    <input type="submit" value="Submit" class="btn btn-{!! config('any_cms.theme-btn') !!} float-right">
                </div>
            </div>
        </form>
    </section>
@endsection

@section('script')
    <script>
        $(function() {

            // Webcam.set({
            //     width: 900,
            //     height: 540,
            //     image_format: 'jpeg',
            //     jpeg_quality: 90
            // });
            // Webcam.attach( '#profile_webcam' );

            // $('#snap').click(function () {
            //     Webcam.snap( function(data_uri) {
            //         document.getElementById('results').innerHTML = '<img id="preview" src="'+data_uri+'"/>';
            //         $('#image').val(data_uri);
            //     } );
            // });

            $('#birth_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

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
