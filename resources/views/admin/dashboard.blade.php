@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row row pt-lg-5">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Report</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Attention</h3>
                            <table class="table" id="attention">
                                <thead>
                                <tr>
                                    <th>Attendant name</th>
                                    <th>Attendant age</th>
                                    <th>Attendant gender</th>
                                    <th>Event name</th>
                                    <th>Attend date</th>
                                    <th>In day</th>
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
                            <h3 class="card-title">Report</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Member</h3>
                            <table class="table" id="member">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
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
