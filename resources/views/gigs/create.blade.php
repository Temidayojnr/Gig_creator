@extends('gigs.layout')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Gig</h6>
            </div>
            <div class="card-body">
                <form action="{{route('AddGig')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" name="role" class="form-control" placeholder="Role">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="companyID">Company</label>
                                <select name="companyID" id="" class="form-control">
                                    <option value="">Select Company</option>
                                    @foreach ($company as $item)
                                        <option value="{{$item->id}}">{{$item->name ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6><strong>Location</strong></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" placeholder="state">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input type="text" class="form-control" name="Address" id="" placeholder="address">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" name="tags" class="form-control" placeholder="Tags" id="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6><strong>Salary</strong></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="MinSalary">Minimum Salary</label>
                                <input type="number" class="form-control" name="MinSalary" id="" placeholder="Minimum">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="MaxSalary">Maximum Salary</label>
                                <input type="number" class="form-control" name="MaxSalary" id="" placeholder="Maximum">
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="col-md-6">
                            <button class="bt btn-success" type="submit">Save Gig</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection