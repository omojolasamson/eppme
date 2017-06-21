@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h1>
                            @if(isset($key))
                                All Pings
                             @else
                                Your Pings
                            @endif
                        </h1>
                    </div>

                            <p>
                                <div class="list-group" type="1">
                                    @foreach ($pings as $ping)
                                        <a href="{{ route('fullPingView', [$ping->id]) }}" class="list-group-item">@php echo "Title: " . $ping->title;@endphp @php if(Auth::user()->id <> $ping->user_id){ echo " by "; if(Auth::user()->role_id < 12){echo $ping->first_name . " " . $ping->last_name;}} @endphp</a>
                                    @endforeach
                                </div>
                            </p>


                </div>
            </div>
        </div>
    </div>

@endsection

