@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>User Profile </h1></div>

                    <p>
                    <ul class="list-group">
                        <li class="list-group-item">@php echo "NAME: " . $profile[0]->first_name . " " . $profile[0]->last_name; @endphp</li>
                        <li class="list-group-item">@php echo "EMAIL: " . $profile[0]->email; @endphp</li>
                        <li class="list-group-item">@php echo "DATE OF BIRTH: " . $profile[0]->day . " " . $profile[0]->month . " " . $profile[0]->year; @endphp</li>

                        <li class="list-group-item">
                            @if($profile[0]->gender == 1)
                                @php echo "GENDER: MALE"; @endphp
                            @else
                                @php echo "GENDER: FEMALE"; @endphp
                            @endif
                        </li>


                        <li class="list-group-item">@php echo "ADDRESS: " . $profile[0]->address; @endphp</li>
                        <li class="list-group-item">@php echo "CITY: " . $profile[0]->city; @endphp</li>
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