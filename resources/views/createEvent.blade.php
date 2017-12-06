@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="pinkwords">Event Registration</h3>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="/events">
                        {{ csrf_field() }}


                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><h5>Event Name</h5></label>

                            <div class="col-md-6">
                                <input id="name" class="teal accent-1" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label"><h5>Description</h5></label>

                            <div class="col-md-6">
                                <textarea id="description" class="materialize-textarea teal accent-1" name="description" required> </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="col l6">
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="address" class="control-label"><h5>Address</h5></label>

                                    <div>
                                        <input id="address" class="teal accent-1" name="address" required>

                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col l6">
                                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                                    <label for="zipcode" class="control-label"><h5>Zip-Code</h5></label>

                                    <div>
                                        <input id="zipcode" class="teal accent-1" name="zipcode" required>

                                        @if ($errors->has('zipcode'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zipcode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class=" control-label"><h5>Image</h5></label>
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>File</span>
                                    <input type="file">
                                  </div>
                                <div class="file-path-wrapper">
                                    <input id="image" class="file-path validate teal accent-1" name="image" required> </textarea>

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div> 
                            <h5 class="white-text">Users take a quiz to find their perfect festival. You will take the same quit to help best match them to your festival! <i class="small material-icons">insert_emoticon</i></h5>
                        </div>

                        <div  id="hiddendiv">        
                            <div class="carousel carousel-slider center" data-indicators="true">
                                <div class="form-group{{ $errors->has('question_two') ? ' has-error' : '' }}">
                                    <div class="carousel-item black white-text" href="#two!">
                                        <div class="container">
                                            <div class="container">
                                                <label for="question_two" class="control-label"><h1 class="white-text center">How long is your event?</h1></label>
                                                <div class="container">
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_two" type="radio" id="test7" value="7" />
                                                        <label for="test7"></label>A. Day festival
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_two" type="radio" id="test8" value="8" />
                                                        <label for="test8"></label>B. Two day festival
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_two" type="radio" id="test9" value="9" />
                                                        <label for="test9"></label>C. Full weekend festival (3-4 days)
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_two" type="radio" id="test10" value="10" />
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
                                                <label for="question_three" class="control-label"><h1 class="white-text center">How large are the crowds?</h1></label>
                                                <div class="container">
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_three" type="radio" id="test11" value="11" />
                                                        <label for="test11"></label>A. Smaller crowds where front row is easily accesible
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_three" type="radio" id="test12" value="12" />
                                                        <label for="test12"></label>B. Medium sized crowds. A good mix of energy and personal space
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_three" type="radio" id="test13" value="13" />
                                                        <label for="test13"></label>C. Huge crowds with high amounts of energy
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
                                                <label for="question_four" class="control-label"><h1 class="white-text center">Which headliner best matches your event's style?</h1></label>
                                                <div class="container">
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_four" type="radio" id="test14" value="14" />
                                                        <label for="test14"></label>A. Alan Walker
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_four" type="radio" id="test15" value="15" />
                                                        <label for="test15"></label>B. Pretty Lights
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_four" type="radio" id="test16" value="16" />
                                                        <label for="test16"></label>C. Skrillex
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_four" type="radio" id="test17" value="17" />
                                                        <label for="test17"></label>D. Porter Robinson
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_four" type="radio" id="test18" value="18" />
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
                                                <label for="question_five" class="control-label"><h1 class="white-text center">How elavorate are the stages at your event?</h1></label>
                                                <div class="container">
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_five" type="radio" id="test22" value="22" />
                                                        <label for="test22"></label>A. Very elaborate
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_five" type="radio" id="test23" value="23" />
                                                        <label for="test23"></label>b. This event is more about just the music
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
                                                <label for="question_six" class="control-label"><h1 class="white-text center">What is the average price range of your event?</h1></label>
                                                <div class="container">
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_six" type="radio" id="test24" value="$50 or less" />
                                                        <label for="test24"></label>A. $50 or less
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_six" type="radio" id="test25" value="$50 - $100" />
                                                        <label for="test25"></label>B. $50 - $100
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_six" type="radio" id="test26" value="$100 - $300" />
                                                        <label for="test26"></label>C. $100 - $300
                                                    </h5>
                                                    <h5 class="white-text left-align valign-wrapper">
                                                        <input name="question_six" type="radio" id="test27" value="$300+" />
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
                                            <label for="question_seven" class="control-label"><h1 class="white-text center">Event dates</h1></label>
                                            <div class="container">
                                                <div class="form-group{{ $errors->has('question_seven') ? ' has-error' : '' }}">
                                                    <label for="question_seven" class="control-label"><h5 class="white-text left-align">Starting date</h5></label>
                                                    <input id="question_seven" name="question_seven" type="text" class="datepicker">
                                                </div>
                                                <div class="form-group{{ $errors->has('question_eight') ? ' has-error' : '' }}">
                                                    <label for="question_eight" class="control-label"><h5 class="white-text left-align">Ending date</h5></label>
                                                    <input id="question_eight" name="question_eight" type="text" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="center-align formsubmitting">
                                <button type="submit" class="btn" onclick="Materialize.toast('Event Registered!', 4000)">
                                    <a>Register</a>
                                </button>
                            </div>
                        </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection