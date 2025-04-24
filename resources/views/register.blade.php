@extends('layout/home/main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><b>Registration</b></div>
            @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
            @elseif(session('error'))
            <div style="color: red">{{ session('error') }}</div>
            @endif
            <div class="card-body">
                <form id="registrationform" action={{url('/register')}} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name
                            <span style="color: red;">*</span>
                        </label>
                        <input type="text" class="form-control" name="fname" id="fname" value="{{ old('fname') }}" placeholder="Enter your first name">
                        @error('fname')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name
                            <span style="color: red;">*</span>

                        </label>
                        <input type="text" class="form-control" name="lname" id="lname" value="{{ old('lname') }}" placeholder="Enter your last name">
                        @error('lname')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address
                            <span style="color: red;">*</span>
                        </label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email">
                        @error('email')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile
                            <span style="color: red;">*</span>
                        </label>
                        <input type="number" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="Enter your mobile">
                        @error('mobile')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                            <span style="color: red;">*</span>
                        </label>
                        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter your password">
                        @error('password')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirm Password
                            <span style="color: red;">*</span>
                        </label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="c_password" placeholder="Confirm password">
                        @error('password_confirmation')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                   
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection