<!doctype html>
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

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
            }

            .navigation {
                padding-bottom: 60px;
            }

            .full-height {
                height: 100vh;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: white;
                padding: 0px 20px;
                text-decoration: none;
                font-family: bebas;
                font-size: 140%;
            }

            p {
              font-family: bebas;  
            }

            h1, h2, h3, h4, h5 {
              font-family: bebas;  
            }

            h2 {
                font-size: 250%;
            }

            .blueparagraph {
                color: #00FFFF;
                padding: 0;
            }

            .information {
                padding-top: 55px;
                padding-bottom: 55px;
                width: 600px;
            }

            #box {
                height: 100px;
                display: block;
                width: 100%;
            }

            @font-face {
                font-family: bebas;
                src: url('{{ asset('fonts/bebas.otf') }}');
            }

            .ff {
                padding-top: 10px;
            }

            .formsubmitting {
                padding-bottom: 50px;
            }

            .carousel {
                height:550px;
            }

            a {
                color: white;
                padding: 0px 20px;
                text-decoration: none;
                font-family: bebas;
                font-size: 140%;
            }

        </style>
    </head>
    
    <body>
        <button class="image black btn-flat ff">
            <a href="{{ url('/') }}">
                <img src="{{ asset('ugh.png') }}">
            </a>
        </button>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links navigation">
                    @auth
                        <a href="{{ url('/browse') }}">Browse</a>
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/browse') }}">Browse</a>
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        <div class="row">
            <div class="center-align col l12">
                <img class="hide-on-med-and-down" src="{{ asset('logo.png') }}">
            </div>
        </div>
        <div class="row information">
            <div class="center-align col s12">
                <h4 class="blueparagraph">All about finding the right festival for you. Answer our short quiz and we can help you plan the perfect festival and even budget for it!</h4>
            </div>
        </div>
        <div class="row">
            <div class="center-align col l12">
                <button class="image black btn-flat">
                    <img src="{{ asset('triangle.png') }}">
                </button> 
            </div>
        </div>

        

        <form class="form-horizontal" method="POST" action="/question">
            {{ csrf_field() }}
            <div  id="hiddendiv">        
                <div class="carousel carousel-slider center" data-indicators="true">
                    <div class="form-group{{ $errors->has('question_one') ? ' has-error' : '' }}">
                         <div class="carousel-item black white-text" href="#one!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_one" class="control-label"><h2 class="white-text center">How far are you willing to travel?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group2" type="radio" id="test3" value="3" />
                                            <label for="test3"></label>
                                            A. I want to stay near home
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group2" type="radio" id="test4" value="4"  />
                                            <label for="test4"></label>B. Up to 50 miles
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group2" type="radio" id="test5" value="5" />
                                            <label for="test5"></label>C. Up to 100 miles
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group2" type="radio" id="test6" value="6" />
                                            <label for="test6"></label>D. I'm willing to travel pretty far
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question_two') ? ' has-error' : '' }}">
                        <div class="carousel-item black white-text" href="#two!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_two" class="control-label"><h2 class="white-text center">What is your ideal festival length?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group3" type="radio" id="test7" value="7" />
                                            <label for="test7"></label>A. Day festival
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group3" type="radio" id="test8" value="8" />
                                            <label for="test8"></label>B. Two day festival
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group3" type="radio" id="test9" value="9" />
                                            <label for="test9"></label>C. Full weekend festival (3-4 days)
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group3" type="radio" id="test10" value="10" />
                                            <label for="test10"></label>D. Week long festival
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question_three') ? ' has-error' : '' }}">
                        <div class="carousel-item black white-text" href="#three!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_three" class="control-label"><h2 class="white-text center">How do you feel about crowds?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group4" type="radio" id="test11" value="11" />
                                            <label for="test11"></label>A. I prefer smaller crowds where I can easily be front row
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group4" type="radio" id="test12" value="12" />
                                            <label for="test12"></label>B. I like medium sized crowds. I like the energy of lots of people but also appreciate a little personal space
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group4" type="radio" id="test13" value="13" />
                                            <label for="test13"></label>C. I love huge crowds with high energy
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question_four') ? ' has-error' : '' }}">
                        <div class="carousel-item black white-text" href="#four!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_four" class="control-label"><h2 class="white-text center">Who is your dream headliner?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group5" type="radio" id="test14" value="14" />
                                            <label for="test14"></label>A. Alan Walker
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group5" type="radio" id="test15" value="15" />
                                            <label for="test15"></label>B. Pretty Lights
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group5" type="radio" id="test16" value="16" />
                                            <label for="test16"></label>C. Skrillex
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group5" type="radio" id="test17" value="17" />
                                            <label for="test17"></label>D. Porter Robinson
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group5" type="radio" id="test18" value="18" />
                                            <label for="test18"></label>E. Dimitri Vegas and Like Mike
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question_five') ? ' has-error' : '' }}">
                        <div class="carousel-item black white-text" href="#five!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_five" class="control-label"><h2 class="white-text center">How important is stage decoration to you?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group6" type="radio" id="test22" value="22" />
                                            <label for="test22"></label>A. Stage is half of the experience
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group6" type="radio" id="test23" value="23" />
                                            <label for="test23"></label>b. I really only care about the music
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('question_six') ? ' has-error' : '' }}">
                        <div class="carousel-item black white-text" href="#six!">
                            <div class="container">
                                <div class="container">
                                    <label for="question_six" class="control-label"><h2 class="white-text center">What is your price range?</h2></label>
                                    <div class="container">
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group7" type="radio" id="test24" value="24" />
                                            <label for="test24"></label>A. $50 or less
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group7" type="radio" id="test25" value="25" />
                                            <label for="test25"></label>B. $50 - $100
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group7" type="radio" id="test26" value="26" />
                                            <label for="test26"></label>C. $100 - $300
                                        </h5>
                                        <h5 class="white-text left-align valign-wrapper">
                                            <input name="group7" type="radio" id="test27" value="27" />
                                            <label for="test27"></label>D. $300+
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item black white-text" href="#seven!">
                        <div class="container">
                            <div class="container">
                                <label for="question_seven" class="control-label"><h2 class="white-text center">pick your dates! You can pick a particular weekend or a time range</h2></label>
                                <div class="container">
                                    <div class="form-group{{ $errors->has('question_seven') ? ' has-error' : '' }}">
                                        <label for="question_seven" class="control-label"><h5 class="white-text left-align">Starting date</h5></label>
                                        <input id="group8" name="group8" type="text" class="datepicker">
                                    </div>
                                    <div class="form-group{{ $errors->has('question_eight') ? ' has-error' : '' }}">
                                        <label for="question_eight" class="control-label"><h5 class="white-text left-align">Ending date</h5></label>
                                        <input id="group9" name="group9" type="text" class="datepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center-align formsubmitting">
                    <button class="btn" type="submit"><a>Submit</a></button>
                </div>
            </div>
        </form>
           

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $('.carousel.carousel-slider').carousel({fullWidth: true});

    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
    });

    $("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".formsubmitting").offset().top},
        'slow');
    });

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>
