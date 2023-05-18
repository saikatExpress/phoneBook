@extends('master')
@section('content')
    <div class="container">
        <section>
            <div class="row">
                @foreach ($contact as $con)
                @endforeach
                <div class="contact_info">
                    <h2 class="border-bottom">Contact info</h2>
                    @if (count($contactDetails))
                        @foreach ($contactDetails as $det)
                            <img src="{{ asset('storage/' . $det->contact_image) }}" alt="no images">
                            <div class="contact_details">
                                <h4>{{ $con->first_name . ' ' . $con->last_name }}</h4>
                                <h4>Phone : {{ $con->phone_number }}</h4>
                            </div>
                        @endforeach
                    @else
                        <img src="{{ asset('logos/demo.jpg') }}" alt="no images">
                        <div class="contact_details">
                            <h4>{{ $con->first_name . ' ' . $con->last_name }}</h4>
                            <h4>Phone : {{ $con->phone_number }}</h4>
                            <button class="btn btn-sm btn-primary" type="button" name="button" id="modalButton">Add
                                details</button>
                        </div>
                    @endif

                    {{-- Response Message Showing --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- Response Message Showing --}}

                </div>


                <div class="modalBody">
                    <div id="myModal" class="myModal">
                        <div class="modal-content">

                            <span id="close" class="close">&times;</span>
                            <h2 class="smart-heading">Add Contact Info</h2>

                            <form style="width:100%" action="{{ route('contact.details') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form_view">
                                    {{-- <label for="id">Contact id</label> <br> --}}
                                    <input class="smart-input" type="hidden" name="contact_id" value="{{ $con->id }}">
                                </div>

                                <div class="form_view">
                                    <label for="images">Upload your image</label> <br>
                                    <input class="smart-input" type="file" name="images">
                                </div>

                                <div class="form_view">
                                    <label for="names">Add father name</label> <br>
                                    <input class="smart-input" type="text" name="father_name">
                                </div>

                                <div class="form_view">
                                    <label for="names">Add mother name</label> <br>
                                    <input class="smart-input" type="text" name="mother_name"">
                                </div>

                                <div class="form_view">
                                    <label for="names">Add Email</label> <br>
                                    <input class="smart-input" type="email" name="email">
                                </div>

                                <div class="form_view">
                                    <label for="names">Job Title</label> <br>
                                    <input class="smart-input" type="text" name="job_title">
                                </div>

                                <div class="form_view">
                                    <label for="names">Add Description</label> <br>
                                    <input class="smart-input" type="text" name="description">
                                </div>

                                <div class="form_view_button">
                                    <x-input-button></x-input-button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script>
        var myModal = document.getElementById("myModal");
        var modalButton = document.getElementById("modalButton");
        var close = document.getElementById("close");

        modalButton.onclick = function() {
            myModal.style.display = "block";
        };

        close.onclick = function() {
            myModal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == myModal) {
                myModal.style.display = "none";
            }
        };
    </script>
@endsection
