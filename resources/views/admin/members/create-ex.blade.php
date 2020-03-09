<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('any_cms.project_name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:300&display=swap" rel="stylesheet">

    <link href="{{ asset('js/buttons.dataTables.min.css') }}" rel="stylesheet">

    <!-- summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <style>
        * {
            font-family: "Kanit", sans-serif;
        }
    </style>

    @yield('style')
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
    <div class="pb-4">

        <!-- Main content -->
        <section class="content">
            <form method="POST" action="{{ route('create-external') }}" enctype="multipart/form-data">
                @csrf
                <div class="row pt-lg-5">
                    <div class="col-md-10 offset-1">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">ลงทะเบียน</h3>
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

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- DataTables -->
{{--<script src="{{ asset('/plugins/datatables/jquery.dataTables.js') }}"></script>--}}
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>


<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>

<script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>
<script src="{{ asset('/js/webcam.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

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

</body>
<script>
    function previewImage(target, input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(target).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            if (confirm('Please confirm to delete this data.')) {
                $(this).closest('form').submit();
            }
        });

    });
</script>
</html>
