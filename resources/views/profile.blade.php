@extends('layouts.admin')

@section('content')
    <h1 class="mb-3">Profile</h1>
    <div class="row">
        <div class="col-md-4 col-12 d-md-none">
            <div class="card p-3 text-center">
                <div class="avatar avatar-xxl mx-auto">
                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <h4 class="fw-bold mb-0">{{ $user->name }}</h4>
                <span>Administor</span>
            </div>
        </div>
        <div class="col-md-8 col-12 pe-3">
            <div class="card p-3">
                <h2>Edit Profile</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="">Name :</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{ old('name') ?? $user->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>                    
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">Email :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>                    
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Email :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>                    
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Edit</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-md-4 col-12 d-md-block d-none">
            <div class="card p-3 text-center">
                <div class="avatar avatar-xxl mx-auto">
                    <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <h4 class="fw-bold mb-0">{{ $user->name }}</h4>
                <span>Administor</span>
            </div>
        </div>

        <div class="col-md-8 col-12 pe-3">
            <div class="card p-3">
                <h2>Edit password</h2>
                <form action="">        
                    <div class="mb-3">
                        <label for="">Password :</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>                    
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Confirm password :</label>
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="comfirm_password" required value=>
                        @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>                    
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Edit</button>
                    </div>

                </form>
            </div>
        </div>

    </div>


@endsection