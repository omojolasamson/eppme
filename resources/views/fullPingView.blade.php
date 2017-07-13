@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <h4 style="text-align: center; border-bottom-style: none">Ping Details </h4>
                <div class="panel panel-default" style="border-radius: 15px;">
                    <!--<div class="panel-heading text-center"></div>-->

                    <p>
                        <strong><ul class="list-group">
                            <li class="list-group-item">@php echo "NAME: " . $details[0]->first_name . " " . $details[0]->last_name; @endphp</li>
                            <li class="list-group-item">@php echo "TITLE: " . $details[0]->title; @endphp</li>
                            <li class="list-group-item">@php echo "DESCRIPTION: " . $details[0]->description; @endphp</li>
                            <li class="list-group-item">@php echo "LONGITUDE: " . $details[0]->longitude; @endphp</li>
                            <li class="list-group-item">@php echo "LATITUDE: " . $details[0]->latitude; @endphp</li>
                            <li class="list-group-item">@php echo "ORGANIZATION: " . $details[0]->organization; @endphp</li>
                            <li class="list-group-item">@php echo "STATUS: " . $details[0]->status; @endphp</li>
                            <li class="list-group-item">@php echo "CREATED AT: " . $details[0]->created_at; @endphp</li>
                        </ul></strong>

                    </p>
                    @if(Auth::user()->role_id < 12)
                        <a style="margin-left: 5%" href="{{ route('userProfile', [$details[0]->user_id]) }}" class="btn btn-primary">View User Profile</a>
                        <a href="" class="btn btn-primary">Forward to @php echo $details[0]->organization @endphp</a>

                    @else
                        <a href="{{ route('deletePing', [$details[0]->id]) }}" class="btn btn-primary pull-right">Delete Ping</a>

                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection