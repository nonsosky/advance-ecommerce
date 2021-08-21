@extends('frontend.main_master')
@section('content')

{{-- @php
 $user = DB::table('users')->where('id', Auth::user()->id)->first();   
@endphp --}}


<div class="body-conntent">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path): url('upload/no_image.jpg') }}" style="border-radius: 50%" height="100%" width="100%" alt="">
                <br> <br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Change Password</span><strong></strong>
                    </h3>
                    <div class="card-body mb-3">
                        <form action="{{ route('user.password.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h5> Current Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="oldpassword" id="current_password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5> New Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password" id="password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5> Current Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger">Update Profile</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection