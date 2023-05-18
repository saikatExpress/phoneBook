@extends('master')
@section('content')
    <div class="container">
        <section>
            <div class="row">
                <div class="col-sm-3">
                    <div class="popularContactDiv">
                        <div class="popularContacs">
                            <h2>Popular Contacts</h2>
                        </div>
                        <div class="contactNumber">
                            <h2>জরুরী সেবা</h2>
                            <h4>৯৯৯</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>শিশু সহায়তা</h2>
                            <h4>১০৯৮</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>নারী ও শিশু নির্যাতন</h2>
                            <h4>১০৯/১০৯২১</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>জাতীয় পরিচয়পত্র</h2>
                            <h4>১০৫</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>সরকারী আইন সেবা</h2>
                            <h4>১৬৪৩০</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>দুর্যোগের আগাম বার্তা</h2>
                            <h4>১০৯৪১</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>দুদক হটলাইন</h2>
                            <h4>১০৬</h4>
                        </div>
                        <div class="contactNumber">
                            <h2>তথ্য সেবা</h2>
                            <h4>৩৩৩</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="popularContactDiv">
                        <div class="popularContacs">
                            <h2 style="text-align:center">Contact List</h2>
                        </div>
                        <div class="new_div">
                            <a class="btn btn-primary btn-sm btn-primary" href="{{ route('contact') }}">Add New Contact</a>
                            <a class="btn btn-primary btn-sm btn-info"
                                href="{{ route('allContact.us') }}">Contact({{ $total }})</a>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-striped table-dark" id="contactTable">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                    @if ($index < 10)
                                        <tr>
                                            <td>{{ $contact->first_name }}</td>
                                            <td>{{ $contact->last_name }}</td>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('edit.contact', Crypt::encryptString($contact->id)) }}">Edit</a>
                                                <a class="btn btn-primary btn-sm btn-success"
                                                    href="{{ route('view.contact', Crypt::encryptString($contact->id)) }}">View</a>
                                                <a class="btn btn-primary btn-sm btn-danger"
                                                    href="{{ route('delete.contact', Crypt::encryptString($contact->id)) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin:0 auto; width:20%">
                            <a class="btn btn-sm btn-primary" href="{{ route('allContact.us') }}">Show All</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="popularContactDiv">
                        <div class="popularContacs">
                            <h2>Area Codes</h2>
                        </div>
                        <div class="contactNumber">
                            <h5>Chittagong District</h5>
                            <h5>031</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Noakhali District</h5>
                            <h5>0321</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Feni District</h5>
                            <h5>0331</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Cox's Bazar District</h5>
                            <h5>0341</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Rangamati District</h5>
                            <h5>0351</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Bandarban District</h5>
                            <h5>0361</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Khagrachari District</h5>
                            <h5>0371</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Laxmipur District</h5>
                            <h5>0381</h5>
                        </div>
                        <div class="contactNumber">
                            <h5>Khulna District</h5>
                            <h5>041</h5>
                        </div>
                        {{-- <div class="contactNumber">
                        <h5>Jessore District</h5>
                        <h5>0421</h5>
                    </div>
                    <div class="contactNumber">
                        <h5>Barisal District</h5>
                        <h5>0431</h5>
                    </div>
                    <div class="contactNumber">
                        <h5>Patuakhali District</h5>
                        <h5>0441</h5>
                    </div>
                    <div class="contactNumber">
                        <h5>Jhenaidah District</h5>
                        <h5>0451</h5>
                    </div> --}}
                        {{-- <a class="btn btn-primary btn-sm" href="">View All</a> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
