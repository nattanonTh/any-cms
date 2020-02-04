@extends('layouts.admin.admin-layout')

@section('content')
    <section class="content">
        <form method="POST" action="{{ route('member.edit', ['member' => $member]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row pt-lg-5">
                <div class="col-md-10 offset-1">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit profile : {!! $member->name !!}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{!! $member->name !!}" placeholder="Name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{!! $member->surname !!}" placeholder="Surname" required>
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="id_card">ID Card</label>
                                <input type="text" id="id_card" name="id_card" class="form-control @error('id_card') is-invalid @enderror" value="{!! $member->id_card !!}" placeholder="ID Card" required>
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
                                           value="{!! date_ui($member->birth_date) !!}"
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
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control @error('mobile_no') is-invalid @enderror" value="{!! $member->mobile_no !!}" placeholder="Tel" required>
                                @error('mobile_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
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
                                <label for="emergency_contact_name">Contact person in case of emergency</label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name" class="form-control @error('emergency_contact_name') is-invalid @enderror" value="{!! $member->emergency_contact_name !!}" placeholder="Contact person in case of emergency" required>
                                @error('emergency_contact_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_mobile">Mobile</label>
                                <input type="text" id="emergency_contact_mobile" name="emergency_contact_mobile" class="form-control @error('emergency_contact_mobile') is-invalid @enderror" value="{!! $member->emergency_contact_mobile !!}" placeholder="Mobile" required>
                                @error('emergency_contact_mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="emergency_contact_relation">Relation to member</label>
                                <input type="text" id="emergency_contact_relation" name="emergency_contact_relation" class="form-control @error('emergency_contact_relation') is-invalid @enderror" value="{!! $member->emergency_contact_relation !!}" placeholder="Relation to member" required>
                                @error('emergency_contact_relation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="congenital_disease">Congenital disease or required information</label>
                                <textarea name="congenital_disease" id="congenital_disease" class="form-control @error('congenital_disease') is-invalid @enderror" placeholder="Congenital disease or required information" cols="30" rows="5">{!! $member->congenital_disease !!}</textarea>
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
                                        <input type="file" class="custom-file-input" id="profile" name="profile">
                                        <label class="custom-file-label" for="profile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                @error('profile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <img id="preview" src="{{ asset($member->profile) }}" alt="preview  image"
                                 style="
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 50%;
                                    "/>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="None">None</option>
                                    <option value="Good">Good</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Bad">Bad</option>
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
