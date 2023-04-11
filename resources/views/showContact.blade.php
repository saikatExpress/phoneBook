@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($contact as $con)
            @endforeach
            <div class="col-sm-4">
                <h2>Contact info</h2>
                <h4>{{ $con->first_name . ' ' . $con->last_name }}</h4>
            </div>
            <div class="col-sm-6">
                <h2>Additional add information</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Father Name</label>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mother Name</label>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload image</label> <br>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
