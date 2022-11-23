@extends('AamarPay.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto mt-5">
                <div class="card">
                    <div class="card-header fw-bold">AamarPay</div>
                    <div class="card-body">
                        <a href="{{ url('/raad/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/raad/download/pdf') }}" class="btn btn-sm btn-secondary">Download as PDF</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Employee as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->salary }}</td>
 
                                        <td>
                                            <a href="{{ url('/raad/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <a  class="btn btn-danger btn-sm" href="{{ url('/raad/destroy/' . $item->id ) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection