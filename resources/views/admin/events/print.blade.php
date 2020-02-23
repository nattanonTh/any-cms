<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>รายงานการเข้าพัก</title>
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

    <!-- summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <style>
        * {
            font-family: "Kanit", sans-serif;
        }

    </style>

    @yield('style')
</head>
<body class="">
<!-- Site wrapper -->
<div class="container">
    <div class="">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img pt-3" src="{{ asset('logo.png') }}" alt="" style="max-width: 230px;">
                    </div>
                    <div class="col-md-7">
                        <div class="pt-5">
                            <h2>ใบรายการผู้เข้าพัก</h2>
                            <h2>Registration From</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-11 form-group">
                        <p>
                            ชื่อ-ชื่อสกุล : {{ $member->name }} {{ $member->surname }}<br>
                            <small class="form-text text-muted">Name-Surname</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <p>
                            เลขที่บัตรประชาชน : {{ $member->id_card }}<br>
                            <small class="form-text text-muted">ID Card number</small>
                        </p>
                    </div>
                    <div class="col-md-6 form-group">
                        <p>
                            เพศ : {{ $member->sex }}<br>
                            <small class="form-text text-muted">Gender</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <p>
                            วัน/เดือน/ปี เกิด : {{ $member->birth_date->format('d/m/Y') }}<br>
                            <small class="form-text text-muted">Birth Day/Month/Year</small>
                        </p>
                    </div>
                    <div class="col-md-6 form-group">
                        <p>
                            อายุ : {{ $member->age }}<br>
                            <small class="form-text text-muted">Age</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 form-group">
                        <p>
                            ที่อยู่ : {{ $member->address }}<br>
                            <small class="form-text text-muted">Address</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 form-group">
                        <p>
                            เบอร์โทร : {{ $member->mobile_no }}<br>
                            <small class="form-text text-muted">Mobile no</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 form-group">
                        <p>
                            Social ID : {{ $member->social_id }}<br>
                            <small class="form-text text-muted">Social ID</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 form-group">
                        <p>
                            กรณีฉุกเฉินติดต่อ : {{ $member->emergency_contact_name }}<br>
                            <small class="form-text text-muted">Emergency contact name</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <p>
                            เบอร์โทรติดต่อ : {{ $member->emergency_contact_mobile }}<br>
                            <small class="form-text text-muted">Contact mobile</small>
                        </p>
                    </div>
                    <div class="col-md-3 form-group">
                        <p>
                            เกี่ยวข้องเป็น : {{ $member->emergency_contact_relation }}<br>
                            <small class="form-text text-muted">relation</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 form-group">
                        <p>
                            โรคประจำตัว หรือข้อมูลพิเศษ : {{ $member->congenital_disease ?? '-' }}<br>
                            <small class="form-text text-muted">Congenital disease</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <p>
                            วันที่เข้าพัก: {{ $attention->attend_start->format('d/m/Y') ?? '-' }}<br>
                            <small class="form-text text-muted">Attend date</small>
                        </p>
                    </div>
                    <div class="col-md-2 form-group">
                        <p>
                            จำนวนวัน: {{ $attention->attend_date }}<br>
                            <small class="form-text text-muted">In date</small>
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <p>
                            จำนวนวัน: {{ $attention->attend_end->format('d/m/Y') ?? '-' }} วัน<br>
                            <small class="form-text text-muted">In date</small>
                        </p>
                    </div>
                </div>

        </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <img class="img-responsive img-rounded" style="max-width: 300px;" src="{!! $member->image !!}" alt="User profile picture">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>ข้าพเจ้าได้รับทราบระเบียบปฏิบัติของสถานที่นี้เรียบร้อยแล้ว<br>และยินดีพร้อมปฏิบัติตามทุกประการ</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 200px;">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>
                                ลงชื่อ ............................................................................................ ผู้เข้าพัก<br>
                                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 300px;">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p>
                                ลงชื่อ ............................................................................................ เจ้าหน้าที่<br>
                                (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4>กิจกรรมที่ต้องเข้าร่วม</h4>
        <div class="row">
            <small class="form-text text-muted">Activities</small>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <p style="white-space: pre-wrap;">{!! $attention->event->event_schedule !!}</p>
            </div>
        </div>

        <h2><strong>* รับเข้าพักเฉพาะผู้มาปกิบัติธรรมเท่านั้น *</strong></h2>
        <h2><strong>* กรุณาคืนกุญแจห้องพักกับเจ้าหน้าที่ทุกครั้งที่ออกจากอาคาร *</strong></h2>
    </div>

</div>

</body>
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>

<script>
    $(function () {
        window.print();
        setTimeout(window.close, 300);
    });
</script>
</html>
