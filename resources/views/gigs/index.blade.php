@extends('gigs.layout')

@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="/gigs/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i>Add GIG</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Gigs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>Role</th>
                            <th>Company</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($gigs as $gig)
                                <tr>
                                    <td>{{$gig->role}}</td>
                                    <td>{{$gig->company}}</td>
                                    <td>{{$gig->created_at}}</td>
                                    <td>{{number_format($gig->MaxSalary, 2)}}</td>
                                    <td>
                                        {{-- <a href="#" class="btn btn-sm btn-primary">Edit gig</a> --}}
                                        <a href="#" class="btn btn-sm btn-danger">Delete gig</a> <br>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection