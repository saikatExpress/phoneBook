@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>Update contact info</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @foreach ($contacts as $contact)
                @endforeach
                <form action="{{ route('update.contact', $contact->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" @error('first_name') is-invalid @enderror
                            value="{{ $contact->first_name }}">
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                            value="{{ $contact->last_name }}">
                        @error('firstname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror"
                            value="{{ $contact->phone_number }}">
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="address" class="form-control" @error('address') is-invalid @enderror
                            value="{{ $contact->address }}">
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

            <div class="col-sm-4">
                <h2>Additional information add</h2>

                <form action="{{ route('contact.details') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job Title</label>
                        <input type="text" class="form-control" placeholder="Job title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Write something about user</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection
