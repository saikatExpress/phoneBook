@extends('master')
@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2>Additional information add</h2>
        {{ $id }}
        <form action="{{ route('contact.details') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload image</label> <br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Father Name</label>
                <input type="text" name="father_name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mother Name</label>
                <input type="text" name="mother_name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Job Title</label>
                <input type="text" name="job_title" class="form-control" placeholder="Job title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Write something about user</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
