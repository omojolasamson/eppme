@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <div class="panel panel-default w3-round-xlarge" style="background-color: #3c8dbc;">
                    <!--<div class="panel-heading text-center"><h1>User Profile </h1></div>-->

                    <p>
                    <div class="" style="text-align: center;">
                        <!-- User Image -->
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>@php echo "NAME: " . $profile[0]->first_name . " " . $profile[0]->last_name; @endphp</strong></li>
                        <li class="list-group-item"><strong>@php echo "EMAIL: " . $profile[0]->email; @endphp</strong></li>
                        <li class="list-group-item"><strong>@php echo "DATE OF BIRTH: " . $profile[0]->day . " " . $profile[0]->month . " " . $profile[0]->year; @endphp</strong></li>

                        <li class="list-group-item"><strong>
                            @if($profile[0]->gender == 1)
                                @php echo "GENDER: MALE"; @endphp
                            @else
                                @php echo "GENDER: FEMALE"; @endphp
                            @endif
                                </strong></li>


                        <li class="list-group-item"><strong>@php echo "ADDRESS: " . $profile[0]->address; @endphp</strong></li>
                        <li class="list-group-item"><strong>@php echo "CITY: " . $profile[0]->city; @endphp</strong></li>
                    </ul>

                    </p>
                    @if(Auth::user()->id > 12 ){
                        <a href="" class="btn btn-primary">Edit Profile</a>
                    }
                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection