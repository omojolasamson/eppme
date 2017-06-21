@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>Ping Details </h1></div>

                    <p>
                        <ul class="list-group">
                            <li class="list-group-item">@php echo "NAME: " . $details[0]->first_name . " " . $details[0]->last_name; @endphp</li>
                            <li class="list-group-item">@php echo "TITLE: " . $details[0]->title; @endphp</li>
                            <li class="list-group-item">@php echo "DESCRIPTION: " . $details[0]->description; @endphp</li>
                            <li class="list-group-item">@php echo "LONGITUDE: " . $details[0]->longitude; @endphp</li>
                            <li class="list-group-item">@php echo "LATITUDE: " . $details[0]->latitude; @endphp</li>
                            <li class="list-group-item">@php echo "ORGANIZATION: " . $details[0]->organization; @endphp</li>
                            <li class="list-group-item">@php echo "STATUS: " . $details[0]->status; @endphp</li>
                            <li class="list-group-item">@php echo "CREATED AT: " . $details[0]->created_at; @endphp</li>
                        </ul>

                    </p>
                    @if(Auth::user()->role_id < 12)
                        <a href="{{ route('userProfile', [$details[0]->user_id]) }}" class="btn btn-primary">View User Profile</a>
                        <a href="" class="btn btn-primary">Forward to @php echo $details[0]->organization @endphp</a>

                    @else
                        <a href="{{ route('deletePing', [$details[0]->id]) }}" class="btn btn-primary pull-right">Delete Ping</a>

                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection