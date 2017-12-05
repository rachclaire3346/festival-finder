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
        src: url('bebas.otf');
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

      .ff {
        padding-top: 10px;
        padding-left: 10px;
    }

    .pinkwords {
       color: #ED1E79;
    }

    .bluewords {
        color: #00FFFF;
    } 

    .blueparagraph {
        color: #00FFFF;
        padding: 0;
    }

    .information {
        padding-top: 55px;
        width: 900px;
    }

    .topper {
        padding-top: 30px;
    }

    </style>

</head>
<body>

<div id="app">
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
    <nav class="black">
      <div class="nav-wrapper">
        <a href="{{ url('/') }}">
            <img class="ff" src="{{ asset('ugh.png') }}">
        </a>
        <ul class="right hide-on-med-and-down">
            @guest
                <li><a style="font-size: 140%;" href="{{ url('/browse') }}">Browse</a></li>
                <li><a style="font-size: 140%;" href="{{ route('login') }}">Login</a></li>
                <li><a style="font-size: 140%;" href="{{ route('register') }}">Register</a></li>
                @else
                <li><a style="font-size: 140%;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="font-size: 140%;" href="{{ url('/browse') }}">Browse</a></li>
                <!-- Dropdown Trigger -->
                <li><a style="font-size: 140%;" class="dropdown-button" href="#!" data-activates="dropdown1"> {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
            @endguest
        </ul>
      </div>
    </nav>
</div>


        <div class="row">
            <div class="center-align col l12">
                <img class="hide-on-med-and-down" style="height:200px; width:600px;" src="{{ asset('logo.png') }}">
            </div>
        </div>

        <div class="topper center-align">
            <h3 class="blueparagraph">Your dream festival is waiting...</h3>
        </div>

        <div class="row information">
            <div class="center-align col l6">
                <h4 class="white-text">We are all about finding the right festival for you! Browse our list of all events or get results tailored just for you by taking the quiz.</h4>

                 <div class="row center-align formsubmitting">
                    <button class="btn">
                        <a href="/">Quiz</a>
                    </button>
                </div>
            </div>

            <div class="center-align col l6">
                <h4 class="white-text">Upload your own events! Fill out the event submission form and short quiz and your event will be added to the site!</h4>

                <div class="row center-align formsubmitting">
                    <button class="btn">
                        <a href="/events">Create Event</a>
                    </button>
                </div>
            </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $(".button-collapse").sideNav();

    $(".dropdown-button").dropdown();    

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
