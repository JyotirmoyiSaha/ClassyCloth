@extends('admin.master')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text],
            select,
            textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #428bca;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #1830b9;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 20%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }


            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }

            *,
            *:before,
            *:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 2rem 1.5rem;
                color: #5a5a5a;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <form action="{{ route('role.store') }}" method='POST'>
                @csrf

                <div class="row">
                    <div class="col-25">
                        <label for="name">Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder=" Enter  Name">
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
            </form>
        </div>

    </body>

    </html>
@endsection
