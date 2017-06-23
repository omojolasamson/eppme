@extends('layouts.app')

@section('content')
    <div class="containerlogin">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-login">
                        <form class="login" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h4>Create An Account</h4>
                            <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label><b>First Name</b></label>

                                <div>
                                    <input id="name" type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label><b>Last Name</b></label>

                                <div>
                                    <input id="name" type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label><b>E-Mail Address</b></label>

                                <div>
                                    <input id="email" type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div>
                                <label><b>Date Of Birth</b></label>

                                <div>

                                    {{ Form::selectRange('day', 1, 31) }}

                                    <select name="month">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    {{ Form::selectYear('year', 1960, 2000, ['name' => 'year']) }}

                                </div>
                            </div>

                            <div>
                                <label><b>Gender</b></label>

                                <div>
                                    <input checked="checked" name="gender" id="gender" type="radio" value="1"><span>Male</span>
                                    <input name="gender" id="gender" type="radio" value="2"><span>Female</span>

                                </div>
                            </div>

                            <div>
                                <label><b>Address</b></label>

                                <div>
                                    <input id="address" type="text" class="form-control" placeholder="Enter Address" name="address" required>

                                </div>
                            </div>

                            <div>
                                <label><b>City</b></label>

                                <div>
                                    <input id="city" type="text" class="form-control" placeholder="Enter City" name="city" required>

                                </div>
                            </div>


                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label><b>Password</b></label>

                                <div>
                                    <input id="password" type="password" class="form-control" placeholder="Enter Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <label><b>Confirm Password</b></label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
                            </div>

                            <div>
                                <div class="col-md-6 col-md-offset-4" style="margin-top: 2%; margin-bottom: 6%;">
                                    <button type="submit" class="btn btn-primary">
                                        Register&nbsp<i class="fa fa-sign-in"></i>
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
