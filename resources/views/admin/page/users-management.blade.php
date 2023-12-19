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
                            <th>No</th>
                            <th>No</th>
                            <th>No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>uhissdhu</td>
                            <td>uhissdhu</td>
                            <td>uhissdhu</td>
                            <td>uhissdhu</td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#"class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
