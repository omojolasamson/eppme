@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1> All Users</h1> </div>

                    <p>
                    <div class="list-group" type="1">
                        @foreach ($users as $user)
                            <a href="{{ route('userProfile', [$user->id]) }}" class="list-group-item">@php echo  $user->first_name . " " . $user->last_name; @endphp</a>
                        @endforeach
                    </div>
                    </p>


                </div>
            </div>
        </div>
    </div>

@endsection