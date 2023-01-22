@extends('layouts.admin')

@section('content')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">My Profile</h2>
                    <h5 class="text-white op-7 mb-2">Edit your personal information</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
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
                    <form action="{{ route('user-profile-information.update') }}" method="post">
                        @csrf
                        @method('PUT')
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
                    <form action="{{ route('user-password.update') }}" method="post">
                        @csrf
                        @method('PUT')        
                        <div class="mb-3">
                            <label for="">Current Password :</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>                    
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="">New password :</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required    >
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>                    
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Confirm new password :</label>
                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" required    >
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
    </div>



@endsection