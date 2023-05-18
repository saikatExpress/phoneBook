@extends('master')
@section('content')
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2>Registation Form</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="small_div">
                        <p>
                            Already have an account ? <a href="{{ route('login') }}">Login</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </section>
    </div>
@endsection
