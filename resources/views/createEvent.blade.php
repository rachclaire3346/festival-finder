@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="pinkwords">Event Registration</h3>
                <div> 
                    <h5 class="white-text">The more details you can provide about your event, the more likely people are to find it <i class="small material-icons">insert_emoticon</i></h5>
                </div>

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


                        <div class="row">
                            <div class="col l6">
                                <div class="form-group{{ $errors->has('start_date') }}">
                                    <label for="start_date" class="col-md-4 control-label"><h5>Start Date</h5></label>

                                    <input id="start_date" name="start_date" type="text" class="teal accent-1 datepicker">

                                    
                                </div>
                            </div>

                            <div class="col l6">
                                <div class="form-group{{ $errors->has('end_date') }}">
                                    <label for="end_date" class="col-md-4 control-label"><h5>End Date</h5></label>
                                    
                                    <input id="end_date" name="end_date" type="text" class="teal accent-1 datepicker">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l6">
                                <div class="form-group{{ $errors->has('attendance') ? ' has-error' : '' }}">
                                    <label for="price" class="col-md-4 control-label"><h5>Attendance Size</h5></label>

                                    <div class="col-md-6">
                                        <input id="price" class="teal accent-1" name="attendance" required>

                                        @if ($errors->has('attendance'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('attendance') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col l6">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price" class="col-md-4 control-label"><h5>Price</h5></label>

                                    <div class="col-md-6">
                                        <input id="price" class="teal accent-1" name="price" required>

                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
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

                        <div class="form-group{{ $errors->has('lineup') ? ' has-error' : '' }}">
                            <label for="lineup" class="col-md-4 control-label"><h5>Top Artists</h5></label>

                            <div class="col-md-6">
                                <textarea id="lineup" class="materialize-textarea teal accent-1" name="lineup" required></textarea>

                                @if ($errors->has('lineup'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lineup') }}</strong>
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <a>Register</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection