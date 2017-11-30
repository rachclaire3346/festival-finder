<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <title>FF</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>FF</title>

    <style>
    html, body {
        background-color: black;
    }

    @font-face {
        font-family: bebas;
        src: url('{{ asset('fonts/bebas.otf') }}');
    }

    p {
        font-family: bebas;
    }

    a {
        color: white;
        padding: 0px 20px;
        text-decoration: none;
        font-family: bebas;
        font-size: 140%;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: bebas;  
    }  

    .pinkwords {
       color: #ED1E79;
    }

    .bluewords {
        color: #00FFFF;
    }

    .ff {
        padding-left: 10px;
        padding-top: 10px;
    } 

    </style>

</head>
<body>

    
    <nav class="black">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}">
                <img class="ff" src="{{ asset('ugh.png') }}">
            </a>
            <ul id="dropdown1" class="dropdown-content">
                <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}</form>
                </a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                @guest
                    <li><a style="font-size: 140%;" href="{{ url('/browse') }}">Browse</a></li>
                    <li><a style="font-size: 140%;" href="{{ route('login') }}">Login</a></li>
                    <li><a style="font-size: 140%;" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a style="font-size: 140%;" href="{{ url('/home') }}">Home</a></li>
                    <li><a style="font-size: 140%;" href="{{ url('/browse') }}">Browse</a></li>
                    <li><a style="font-size: 140%;" href="{{ url('/about') }}">About</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a style="font-size: 140%;" class="dropdown-button" href="#!" data-activates="dropdown1"> {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
                @endguest
            </ul>
        </div>
    </nav>
@yield('content')

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $(".button-collapse").sideNav();

    $(".dropdown-button").dropdown(); 

    $(document).ready(function() {
    $('select').material_select();
    }); 


    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
    });  

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
