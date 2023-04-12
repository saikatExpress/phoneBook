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

            </div>
        </div>
    </div>
@endsection
