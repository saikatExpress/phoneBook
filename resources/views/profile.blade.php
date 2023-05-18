@extends('master')
@section('content')
    <div class="container">
        <section>
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

                    @foreach ($profile as $prof)
                        <img class="profile_img" src="{{ asset('storage/' . $prof->profile_images) }}" alt="Profile image">
                        @if ($profile)
                            <div class="user_profile_block">
                                <h2>{{ Auth::user()->name }}</h2>
                                <h4>{{ $prof->home_town }}</h4>
                                <button id="modalButton" class="btn btn-sm btn-primary" type="button" name="button">Edit
                                    Profile</button>
                            </div>

                            {{-- =========Edit Profile Modal HTML code start from here============= --}}
                            <div class="modalBody">
                                <div id="myModal" class="myModal">
                                    <div class="modal-content">

                                        <span id="close" class="close">&times;</span>
                                        <h2 class="smart-heading">Edit Profile</h2>

                                        <form style="width:100%" action="{{ route('userDetail.us') }}" method="post"
                                            enctype="multipart/form-data">

                                            @csrf
                                            <div class="form_view">
                                                <label for="images">Upload your image</label> <br>
                                                <input class="smart-input" type="file" name="images">
                                            </div>

                                            <div class="form_view">
                                                <label for="names">Edit your father name</label> <br>
                                                <input class="smart-input" type="text" name="father_name"
                                                    value="{{ $prof->father_name }}">
                                            </div>

                                            <div class="form_view">
                                                <label for="names">Edit your mother name</label> <br>
                                                <input class="smart-input" type="text" name="mother_name"
                                                    value="{{ $prof->mother_name }}">
                                            </div>

                                            <div class="form_view">
                                                <label for="names">Add your Current City</label> <br>
                                                <input class="smart-input" type="text" name="city"
                                                    value="{{ $prof->current_city }}">
                                            </div>

                                            <div class="form_view">
                                                <label for="names">Edit your Home Town</label> <br>
                                                <input class="smart-input" type="text" name="town"
                                                    value="{{ $prof->home_town }}">
                                            </div>

                                            <div class="form_view">
                                                <label for="names">Edit your School</label> <br>
                                                <input class="smart-input" type="text" name="school"
                                                    value="{{ $prof->school }}">
                                            </div>

                                            <div class="form_view_button">
                                                <x-input-button></x-input-button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            {{-- =========Edit Profile Modal HTML code end from here============= --}}
                        @else
                            <div class="user_profile_block">
                                <h2>{{ Auth::user()->name }}</h2>
                                <button id="modalButton-1" class="btn btn-sm btn-primary" type="button" name="button">Add
                                    Details</button>
                            </div>
                        @endif
                    @endforeach

                    {{-- =========Add details Modal HTML code start from here============= --}}
                    <div class="modalBody">
                        <div id="myModal1" class="myModal">
                            <div class="modal-content">

                                <span id="close1" class="close">&times;</span>
                                <h2 class="smart-heading">Edit Profile</h2>

                                <form style="width:100%" action="{{ route('userDetail.us') }}" method="post"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="form_view">
                                        <label for="images">Upload your image</label> <br>
                                        <input class="smart-input" type="file" name="images">
                                    </div>

                                    <div class="form_view">
                                        <label for="names">Add your father name</label> <br>
                                        <input class="smart-input" type="text" name="father_name">
                                    </div>

                                    <div class="form_view">
                                        <label for="names">Add your mother name</label> <br>
                                        <input class="smart-input" type="text" name="mother_name">
                                    </div>

                                    <div class="form_view">
                                        <label for="names">Add your Current City</label> <br>
                                        <input class="smart-input" type="text" name="city">
                                    </div>

                                    <div class="form_view">
                                        <label for="names">Add your Home Town</label> <br>
                                        <input class="smart-input" type="text" name="town">
                                    </div>

                                    <div class="form_view">
                                        <label for="names">Add your School</label> <br>
                                        <input class="smart-input" type="text" name="school">
                                    </div>

                                    <div class="form_view_button">
                                        <x-input-button></x-input-button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    {{-- =========Add details Modal HTML code end from here============= --}}
                </div>

            </div>
        </section>
    </div>

    {{-- =======JavaScript Code Here========= --}}
    <script>
        //    ==========Edit Profile Modal JS code start from here==========
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
        //    ==========Edit Profile Modal JS code end from here==========


        //    ==========Add Details Profile Modal JS code start from here==========
        var myModal1 = document.getElementById("myModal1");
        var modalButton1 = document.getElementById("modalButton-1");
        var close1 = document.getElementById("close1");

        modalButton1.onclick = function() {
            myModal1.style.display = "block";
        };

        close1.onclick = function() {
            myModal1.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == myModal1) {
                myModal1.style.display = "none";
            }
        };
        //    ==========Add Details Profile Modal JS code start from here==========
    </script>
@endsection
