@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        window.onload = function()
        {
            document.getElementById("middle").className = "middle";
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <ul id="progressbar">
                    <li class="first">Send Ping</li>
                    <li id="middle">Report Emergency</li>
                    <li>Delivered</li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>Tell us about your emergency</h1></div>
                    <form action="/save" method="post" class="col-md-6 col-md-offset-3" style="margin-top: 5%;">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" id="description" name="description" class="form-control textbox" style="height: 150px;"></textarea>
                        </div>
                        <div>
                            <select class="big-drop-down" name="organization" id="">
                                <option style="display:none" disabled selected value> -- select an option -- </option>
                                <option value="Fire Service">Fire Service</option>
                                <option value="LASMA">LASMA</option>
                                <option value="Road Safety">Road Safety</option>
                                <option value="VIO">VIO</option>
                            </select>
                        </div>

                        <input type="hidden" value="{{ $ping_id[0] }}" id="title" name="ping_id" class="form-control">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary" style="margin-left: 41%; margin-bottom: 2%; margin-top: 8%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
