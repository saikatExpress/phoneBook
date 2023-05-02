@extends('master')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="popularContacs">
            <h2>Popular Contacts</h2>
          </div>
        </div>
        <div class="col-sm-6">
          <h2 style="text-align:center">Contact List</h2>
          <div class="new_div">
              <a class="btn btn-primary btn-sm btn-primary" href="{{ route('contact') }}">Add New Contact</a>
              <button class="btn btn-primary btn-sm btn-info">Contact({{ $total }})</button>
          </div>
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <table class="table table-striped table-dark">
              <thead>
                  <tr>
                      <th scope="col">SL</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $sl = 1; ?>
                  @foreach ($contacts as $contact)
                      <tr>
                          <th scope="row">{{ $sl++ }}</th>
                          <td>{{ $contact->first_name }}</td>
                          <td>{{ $contact->last_name }}</td>
                          <td>{{ $contact->phone_number }}</td>
                          <td>{{ $contact->address }}</td>
                          <td>
                              <a class="btn btn-primary btn-sm"
                                  href="{{ route('edit.contact', Crypt::encryptString($contact->id)) }}">Edit</a>
                              <a class="btn btn-primary btn-sm btn-success"
                                  href="{{ route('view.contact', Crypt::encryptString($contact->id)) }}">View</a>
                              <a class="btn btn-primary btn-sm btn-danger"
                                  href="{{ route('delete.contact', Crypt::encryptString($contact->id)) }}">Delete</a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <div class="col-sm-3">
          <h2>Most needed contacts</h2>
        </div>
      </div>
    </div>
@endsection
