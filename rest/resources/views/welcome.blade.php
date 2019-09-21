<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
       <div class="container">
        <div id="messages"></div>
        <form id="form-data" method="post" data-route="{{ route('postData') }}">
            {{ csrf_field() }}
            <input type="text" name="person_name" placeholder="name" value="{{ Session::token() }}" ><br>
            <input type="email" name="person_email" placeholder="email" value="{{ Session::token() }}"><br>
            <input type="text" name="person_pincode" placeholder="pincode" value="{{ Session::token() }}" ><br>
            <button class="btn btn-success" type="submit">Submit!</button>
        </form>
       </div>
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
       <script type="text/javascript" src="{{ asset('js/post.js') }}"></script>
    </body>
</html>
