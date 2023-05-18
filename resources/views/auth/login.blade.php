@extends('master')
@section('content')
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2>Login form</h2>
                    <form action={{ route('login.create') }} method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="small_div">
                        <p>
                            You have any account ? <a href="/registation">Registered</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </section>
    </div>
@endsection
