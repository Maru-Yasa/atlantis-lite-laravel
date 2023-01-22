@extends('layouts.admin')

@section('content')
    

        <div class="mb-3">
            <h1>Users</h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary"> <span class="btn-label"><i class="fas fa-plus"></i></span> Add new users</a>
        </div>
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
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex">
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
        


    @section('js')

        <script>
            $('#data_table').DataTable()
        </script>

    @endsection


@endsection