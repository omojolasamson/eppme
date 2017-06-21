@extends('layouts.app')

@section('content')
    <form class="login" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="imgcontainer">
            <img src="img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="containerlogin">
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <label><b>E-mail Address</b></label>
                <div>
                    <input class="inputlogin" id="email" type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <label><b>Password</b></label>
                <div>
                    <input class="inputlogin" id="password" type="password" placeholder="Enter Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <button class="buttonlogin" type="submit">Login</button>
            <div>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            </div>
        </div>

        <div class="containerlogin" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn buttonlogin">Cancel</button>
            <span class="psw">Forgot <a href="{{ route('password.request') }}">password?</a></span>
        </div>
    </form>
@endsection
