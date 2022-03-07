@extends('admin/layouts/app')
@section('content')

<div class="container-fluid mt--6">
    <form action="{{route('profile.update', Auth::id())}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex justify-content-between">
                <h3>Edit Profile</h3>
                <a href="{{route('profile.index')}}" class="btn btn-outline-success btn-sm"><i
                        class="bi bi-arrow-left"></i> Back</a>
            </div>
            <div class="card-body p-5">

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h5>Name <span class="text-danger"></span></h5>
                    </label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nama" value="{{$admin->nama}}">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h5>Address <span class="text-danger"></span></h5>
                    </label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="alamat" value="{{$admin->alamat}}">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h5>Email <span class="text-danger"></span></h5>
                    </label>

                    <div class="col-sm-7">
                        <input type="email" class="form-control" name="email" value="{{$admin->user->email}}">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h5>New Password <span class="text-danger"></span></h5>
                    </label>

                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="password" id="newpassword" class="form-control" placeholder="New Password"
                                value="" name="password">
                            <span class="input-group-text customicon" id="show-hide-password">
                                <i class="bi bi-eye-slash d-block" id="eye-slash"></i>
                                <i class="bi bi-eye d-none" id="eye"></i>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row mb-5 mx-auto d-flex justify-content-center">
                            <div class="col">
                                <div class="text-center customimage">
                                    <img src="{{ asset('storage/' . $admin->path_foto) }}"
                                        class="rounded-circle customimage" id="profile-picture-view"
                                        data-old-src="{{ asset('storage/' . $admin->path_foto) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mx-auto">
                            <div class="col-12">
                                <input class="form-control customicon" type="file" id="profile-picture-browse"
                                    name="file">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection

@push('js')
<script>
    $(function() {
        $("#show-hide-password").on("click", function() {
            const newPassword = $("#newpassword");
            const eyeSlash = $("#eye-slash");
            const eye = $("#eye");

            if (newPassword.attr("type") === "password") {
                newPassword.attr("type", "text");
                eyeSlash.removeClass("d-block").addClass("d-none");
                eye.removeClass("d-none").addClass("d-block");
            } else {
                newPassword.attr("type", "password");
                eye.removeClass("d-block").addClass("d-none");
                eyeSlash.removeClass("d-none").addClass("d-block");
            }
        });

        $("#profile-picture-browse").on("change", function() {
            const profilePicture = $("#profile-picture-view");
            const file = $(this)[0].files[0];

            // Jika memilih file
            if (file !== undefined) {
                const fileReader = new FileReader();

                fileReader.onload = function (e) {
                    profilePicture.attr("src", e.target.result);
                };

                fileReader.readAsDataURL(file);
            } else { // Jika tidak memilih file
                profilePicture.attr("src", profilePicture.data("oldSrc"));
            }
        });
    });
</script>
@endpush