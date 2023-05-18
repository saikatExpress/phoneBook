@extends('master')
<style>
    /* CSS styles for the table */
    .contact_img {
        width: 40px;
        height: 40px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
@section('content')
    <div class="container">
        <section>
            <h4 class="border-bottom">All Contact</h4>

            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr onmouseover="highlightRow(this);" onmouseout="removeHighlight(this);">
                            <td><img class="contact_img" src="{{ asset('logos/demo.jpg') }}" alt="Contact Image"></td>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ $contact->phone_number }}</td>
                            <td>{{ $contact->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

    <script>
        /* JavaScript to highlight selected rows */
        function highlightRow(row) {
            row.style.backgroundColor = "#ffff99";
        }

        function removeHighlight(row) {
            row.style.backgroundColor = "";
        }
    </script>
@endsection
