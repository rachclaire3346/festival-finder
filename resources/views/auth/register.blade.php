@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div><h3 class="pinkwords">Register</h3></div>

        <div>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label"><h5>Name</h5></label>

                    <div>
                        <input id="name" type="text" class="teal accent-1" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address" class="control-label"><h5>Address</h5></label>

                    <div>
                        <input id="address" class="teal accent-1" name="address" value="{{ old('address') }}" required>

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                    <label for="zipcode" class="control-label"><h5>Zip-Code</h5></label>

                    <div>
                        <input id="zipcode" class="teal accent-1" name="zipcode" value="{{ old('email') }}" required>

                        @if ($errors->has('zipcode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('zipcode') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label"><h5>E-Mail Address</h5></label>

                    <div>
                        <input id="email" type="email" class="teal accent-1" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label"><h5>Password</h5></label>

                    <div>
                        <input id="password" type="password" class="teal accent-1" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="control-label"><h5>Confirm Password<h5></label>

                    <div>
                        <input id="password-confirm" type="password" class="teal accent-1" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            <a>Register</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
