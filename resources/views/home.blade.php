@extends('master')
@section('content')
    <div class="container">

        <h2 style="text-align:center">Contact List</h2>
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
@endsection
