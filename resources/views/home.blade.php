@extends('layouts.app')

@section('content')
    <script>
        let x = document.getElementById("demo");

        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(savePosition);


            } else{
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function savePosition(position){

            window.latitude = position.coords.latitude;
            window.longitude = position.coords.longitude;
            $('#ping').attr('href', '/form/' + longitude + '/' + latitude);
            window.location = '/form/' + longitude + '/' + latitude;

        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <ul id="progressbar">
                    <li class="first">Send Ping</li>
                    <li>Report Emergency</li>
                    <li>Delivered</li>
                </ul>
                <div class="panel panel-default" style="height: 200px;">
                    <div class="panel-heading text-center"><h4>Send Ping</h4></div>

                    <div class="panel-body" style="padding-left: 41%;">
                        <a style="text-decoration: none; color: white;" id="ping" onclick="getLocation()"  class="btn btn-lg btn-primary col-xs-4" >Ping!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
