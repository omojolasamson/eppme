@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <h4 style="text-align: center; border-bottom-style: none">
                    @if(isset($key))
                        All Pings
                    @else
                        Your Pings
                    @endif
                </h4>
                <div class="panel panel-default" style="border-radius: 15px;">
                    <!--<div class="panel-heading text-center">

                    </div>-->

                            <p>
                                <div class="list-group" type="1">
                                    @foreach ($pings as $ping)
                                        <strong><a href="{{ route('fullPingView', [$ping->id]) }}" class="list-group-item">@php echo "Title: " . $ping->title;@endphp @php if(Auth::user()->id <> $ping->user_id){ echo " by "; if(Auth::user()->role_id < 12){echo $ping->first_name . " " . $ping->last_name;}} @endphp</a></strong>
                                    @endforeach
                                </div>
                            </p>


                </div>
            </div>
        </div>
    </div>

@endsection

