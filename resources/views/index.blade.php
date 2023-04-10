@extends('master')
@section('content')
    <div class="container">
        <div class="greeting_div">
            <h2 class="text-center fs-1 fw-bold font-monospace">Welcome to Phone Book World</h2>
            <p class="text-center fs-6 lh-lg">
                A phonebook project is the best practice,for learning CRUD operation.If you want to clear your concept about
                CRUD operation,phonebook project is the best choice for learnig this mechanism.Most of web application has
                must CRUD operation.So it's the right time to practice and learning CRUD operation with Laravel and Mysql.If
                you are first in web programmer,i can suggest you to,firstly you practice raw php code in variours site.Like
                <a href="https://www.w3schools.com/">W3School</a>,<a href="https://www.youtube.com/">Youtube</a> and
                others.Trying to learn basic to core php coding and make a clear concept about php and programing.
            </p>
        </div>

        <div class="phonebook_div">
            <div class="flex_div">
                <h4>Create a laravel project</h4>
                <p>
                    Your first task is create a laravel project with composer.If you are not familiar with Laravel,please
                    visit <a href="www.laravel.com">Laravel</a>
                </p>
            </div>
            <div class="flex_div">
                <h4>Start your project</h4>
                <p>
                    After successfully created laravel project,now start your project the given instructions and name the
                    project myPhoneBook.So let's start..! <a href="/home">Go to Home</a>
                </p>
            </div>
            <div class="flex_div">
                <h4>See your Contact list</h4>
                <p>
                    See your contact list,which are created and save it to database.If you are not save yet,please <a
                        href="">Create Contact</a>
                </p>
            </div>
            <div class="flex_div">
                <h4>Create new contact</h4>
                <p>
                    If you learn,how to "C",means "CREATE".First to go to the link and create a new contact and save it to
                    database. <a href="">Create new Contact</a>
                </p>
            </div>
            <div class="flex_div">
                <h4>Update your contact</h4>
                <p>
                    Already you know "U" means "UPDATE",If you familiar with update,please update a specific contact
                    number,which is already you created. <a href="">Update Contact</a>
                </p>
            </div>
            <div class="flex_div">
                <h4>Delete your contact</h4>
                <p>
                    "D" means "DELETE".I wish you are already completed "CREATE","UPDATE","READ".Now your turn in DELETE.No
                    problem,if you know others three operations,delete is easier for you. <a href="">Delete
                        Contact</a>
                </p>
            </div>
        </div>

    </div>
@endsection
