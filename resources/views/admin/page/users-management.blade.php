@extends('layouts.backend.app')

@section('title', 'Users Management')

@section('content_title', 'Users Management')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-primary">Add Users</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user => $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nik }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <img src="{{ asset('storage/user/' . $value->image) }}" width="50px" alt="" draggable="false">
                            </td>
                            <td>{{ $value->Role->name }}</td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#"class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
