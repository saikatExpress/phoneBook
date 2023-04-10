@extends('master')
@section('content')
    <div class="container">
        <h2 style="text-align:center">Contact List</h2>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Keranigonj</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="">Edit</a>
                        <a class="btn btn-primary btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Keranigonj</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="">Edit</a>
                        <a class="btn btn-primary btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Keranigonj</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="">Edit</a>
                        <a class="btn btn-primary btn-sm btn-danger" href="">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
