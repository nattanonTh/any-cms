@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row row pt-lg-5">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงาน</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>รายงานการร่วมกิจกรรม</h3>
                            <table class="table" id="attention">
                                <thead>
                                <tr>
                                    <th>ชื่อผู้เข้าร่วม</th>
                                    <th>อายุ</th>
                                    <th>เพศ</th>
                                    <th>กิจกรรม</th>
                                    <th>วันที่เริ่มการเข้าร่วม</th>
                                    <th>จำนวนวันที่เข้าร่วม</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attentions as $attention)
                                    <tr>
                                        <td>{{ $attention->member->name }} {{ $attention->member->surname }}</td>
                                        <td>{{ $attention->member->age }}</td>
                                        <td>{{ $attention->member->sex }}</td>
                                        <td>{{ $attention->event->event_name }}</td>
                                        <td>{{ $attention->attend_start }}</td>
                                        <td>{{ $attention->attend_date }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายงาน</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>สมาชิก</h3>
                            <table class="table" id="member">
                                <thead>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>อายุ</th>
                                    <th>เพศ</th>
                                    <th>สถานะ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{ $member->name }} {{ $member->surname }}</td>
                                        <td>{{ $member->age }}</td>
                                        <td>{{ $member->sex }}</td>
                                        <td>{{ $member->status }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#attention').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel'
                ]
            } );

            $('#member').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel'
                ]
            } );
        });
    </script>
@endsection
