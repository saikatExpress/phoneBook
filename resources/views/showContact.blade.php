@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($contact as $con)
            @endforeach
            <div class="col-sm-4">
                <h2>Contact info</h2>
                <img src="{{ asset('images/blank-profile-picture-973460__340.webp') }}" alt="no images">
                <h4>{{ $con->first_name . ' ' . $con->last_name }}</h4>
                <h4>Phone : {{ $con->phone_number }}</h4>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('contact.detail', $con->id) }}">Add more information</a>
            </div>
        </div>
    </div>
@endsection
