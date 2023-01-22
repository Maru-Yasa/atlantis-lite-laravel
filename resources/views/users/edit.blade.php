@extends('layouts.admin')

@section('content')
    

    <div class="mb-3">
        <h1>Edit user</h1>
    </div>
    <div class="card p-3">

        <form action="{{ route('users.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">Name :</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{ old('name') ?? $data->name }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Email :</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') ?? $data->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>                    
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Password :</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>                    
                @enderror
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Edit</button>
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-link">Back</a>
            </div>


        </form>

    </div>



@endsection
