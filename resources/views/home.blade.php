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

    .formsubmitting {
        padding-bottom: 50px;
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
                <li><a style="font-size: 140%;" href="{{ url('/about') }}">About</a></li>
                <li><a style="font-size: 140%;" href="{{ route('login') }}">Login</a></li>
                <li><a style="font-size: 140%;" href="{{ route('register') }}">Register</a></li>
                @else
                <li><a style="font-size: 140%;" href="{{ url('/browse') }}">Browse</a></li>
                <li><a style="font-size: 140%;" href="{{ url('/about') }}">About</a></li>
                <!-- Dropdown Trigger -->
                <li><a style="font-size: 140%;" class="dropdown-button" href="#!" data-activates="dropdown1"> {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
            @endguest
        </ul>
      </div>
    </nav>
    <div class="row information">
        <div class="center-align col s12">
           <h2 class="bluewords">{{ Auth::user()->name }}'s Festivals</h2>
        </div>
    </div>
    <div class="container">
        <h3 class="pinkwords">Matched Events</h3>
        @foreach($events as $event)
            <h4 class="white-text">{{$event->name}}</h4>
            <div class="row">
                <div class="col l6 s12">
                    <img style="height:280px; width:430px;" src="{{ asset('tomorrowland.jpg') }}">
                </div>
                <div class="col l6 s12">
                    <h5 class="white-text">Location: {{$event->address}}</h5>
                    <h5 class="white-text">Price: {{$event->question_six}}</h5>
                    <h5 class="white-text">Dates: {{$event->question_seven}} - {{$event->question_eight}}</h5>
                    <h5 class="white-text">Description: {{$event->description}}</h5>
                </div>
            </div>
        @endforeach
        <div class="row center-align formsubmitting">
        <button class="btn">
            <a href="/">Retake Quiz</a>
        </button>
    </div>
    </div>
   <div class="container">
        <h3 class="pinkwords">Upcoming Events</h3>
        @foreach($locals as $local)
            <h4 class="white-text">{{$local->name}}</h4>
            <div class="row">
                <div class="col l6 s12">
                    <img style="height:280px; width:430px;" src="{{ asset('tomorrowland.jpg') }}">
                </div>
                <div class="col l6 s12">
                    <h5 class="white-text">Location: {{$local->address}}</h5>
                    <h5 class="white-text">Price: {{$local->question_six}}</h5>
                    <h5 class="white-text">Dates: {{$local->question_seven}} - {{$local->question_eight}}</h5>
                    <h5 class="white-text">Description: {{$local->description}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="container">
        <h3 class="pinkwords">My Registered Events</h3>
        @foreach($events as $event)
            <h4 class="white-text">{{$event->name}}</h4>
            <div class="row">
                <div class="col l6 s12">
                    <img style="height:280px; width:430px;" src="{{ asset('tomorrowland.jpg') }}">
                </div>
                <div class="col l6 s12">
                    <h5 class="white-text">Location: {{$event->address}}</h5>
                    <h5 class="white-text">Price: {{$event->question_six}}</h5>
                    <h5 class="white-text">Dates: {{$event->question_seven}} - {{$event->question_eight}}</h5>
                    <h5 class="white-text">Description: {{$event->description}}</h5>
                </div>
            </div>
        @endforeach
    </div>

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
