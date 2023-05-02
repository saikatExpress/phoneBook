@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="contactBox">
                    <div class="text_style">
                        <h2>Contacts</h2>
                        <a href="{{ route('contact.form') }}" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="contactArea">

                        @foreach ($contacts as $contact)
                            <div class="contactList">
                                <h4>{{ $contact->first_name . ' ' . $contact->last_name }}</h4>
                                <h6>{{ $contact->phone_number }}</h6>
                                <strong>{{ $contact->address }}</strong>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <img class="profile_img" src="{{ asset('images/1.jpg') }}" alt="no image">
                <h2>{{ Auth::user()->name }}</h2>
                <button type="button" id="modalButton" name="button">Edit Profile</button>
            </div>
        </div>
    </div>
@endsection
