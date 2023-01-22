@extends('layouts.admin')

@section('content')
    
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Users</h2>
                        <h5 class="text-white op-7 mb-2">Manage data users</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-round"> <span class="btn-label"><i class="fas fa-plus"></i></span> Add new users</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            @if (Session::has('success'))
                <div class="alert alert-success mb-3" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger mb-3" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="table-responsive card p-3">
                <table id="data_table" class="display table table-striped table-hover" cellspacing="0" width="100%">
                    <thead class="bg-primary text-white">
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
    
                        @foreach ($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="d-flex align-items-center">
                                    <div class="avatar-sm mr-3">
                                        <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="..." class="avatar-img rounded-circle">
                                    </div>    
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-round mr-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-round"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
    
                    </tbody>
                </table>
            </div>
            
        </div>



    @section('js')

        <script>
            $('#data_table').DataTable()
        </script>

    @endsection


@endsection