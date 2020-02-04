@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('member.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add New Member</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="" placeholder="Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="" placeholder="Surname" required>
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_card">ID Card</label>
                                <input type="text" id="id_card" name="id_card" class="form-control @error('id_card') is-invalid @enderror" value="" placeholder="ID Card" required>
                                @error('id_card')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Birth date</label>
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
                                <label for="mobile_no">Tel</label>
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="" placeholder="Tel" required>
                                @error('mobile_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
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
                                <label for="emergency_contact_name">Contact person in case of emergency</label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name" class="form-control @error('emergency_contact_name') is-invalid @enderror" value="" placeholder="Contact person in case of emergency" required>
                                @error('emergency_contact_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_mobile">Mobile</label>
                                <input type="text" id="emergency_contact_mobile" name="emergency_contact_mobile" class="form-control @error('emergency_contact_mobile') is-invalid @enderror" value="" placeholder="Mobile" required>
                                @error('emergency_contact_mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_relation">Relation to member</label>
                                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" class="form-control @error('emergency_contact_relation') is-invalid @enderror" value="" placeholder="Relation to member" required>
                                @error('emergency_contact_relation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="congenital_disease">Congenital disease or required information</label>
                                <textarea name="congenital_disease" id="congenital_disease" class="form-control @error('congenital_disease') is-invalid @enderror" placeholder="Congenital disease or required information" cols="30" rows="5"></textarea>
                                @error('congenital_disease')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="profile" class="preview">Profile</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="profile_path" name="profile_path">
                                        <label class="custom-file-label" for="profile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                <div id="profile_webcam"></div>
                                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                @error('profile_path')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div id="results"></div>
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
            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            Webcam.attach( '#profile_webcam' );

            function take_snapshot() {
                // take snapshot and get image data
                Webcam.snap( function(data_uri) {
                    // display results in page
                    document.getElementById('results').innerHTML =
                        '<h2>Here is your image:</h2>' +
                        '<img src="'+data_uri+'"/>';
                } );
            }

            $('#birth_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

            $("#profile").on("change", function() {
                if(this.files[0].size > 5048580){
                    alert("Image file is too big.");
                    this.value = "";
                } else {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    previewImage('#preview', this);
                }
            });
        })
    </script>
@endsection
