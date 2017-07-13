@extends('layouts.app')

@section('content')
    <div class="containerlogin">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="form-login">
                    <form class="login" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <h4>Welcome back!</h4>
                                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label><b>E-mail Address</b></label>
                                    <div>
                                        <input class="form-control input-sm chat-input" id="email" type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                </br>
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label><b>Password</b></label>
                                <div>
                                    <input class="form-control input-sm chat-input" id="password" type="password" placeholder="Enter Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                        </br>
                        <div class="wrapperlogin">
                            <span class="group-btn">
                                <button style="width: 40%;" type="submit" class="btn btn-primary btn-md"><i class="fa fa-sign-in"></i> login</button>
                            </span>
                        </div>
                            <div style="margin-top: 5%;">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                <span style="float: right" class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>
                            </div>


                        <div style="padding-top: 15px; font-size: 85%;">Don't have an account? <a href="{{ route('register') }}">

                                Sign Up Here

                            </a>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

@endsection
