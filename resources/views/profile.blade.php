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

              <div class="contactList">
                <h4>Abdul Kadir</h4>
                <h6>01713-617913</h6>
                <strong>Mirpur,Dhaka</strong>
              </div>

              <div class="contactList">
                <h4>Mynul Hasan Reyad</h4>
                <h6>01713-617913</h6>
                <strong>Mirpur,Dhaka</strong>
              </div>

              <div class="contactList">
                <h4>Ariyan Chowdhury Rafi</h4>
                <h6>01713-617913</h6>
                <strong>Mirpur,Dhaka</strong>
              </div>

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
