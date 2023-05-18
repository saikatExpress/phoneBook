@extends('master')
@section('content')
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-4">
                    <h2>Contact List</h2>
                </div>
                <div class="col-sm-4">
                    <h2>Create Contact Form</h2>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('create.contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">First name</label>
                            <input type="text" name="firstname"
                                class="form-control @error('firstname') is-invalid @enderror" placeholder="Enter name"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last name</label>
                            <input type="text" name="lastname"
                                class="form-control @error('lastname') is-invalid @enderror" placeholder="Enter name"
                                value="{{ old('lastname') }}">
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone number</label>
                            <input type="text" name="phonenumber"
                                class="form-control @error('phonenumber') is-invalid @enderror"
                                value="{{ old('phonenumber') }}" placeholder="Enter number">
                            @error('phonenumber')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                placeholder="Enter address" value={{ old('address') }}>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
