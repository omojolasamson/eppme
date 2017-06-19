@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        window.onload = function()
        {
            document.getElementById("middle").className = "middle";
            document.getElementById("last").className = "last";
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                @if($key == 1)
                    <ul id="progressbar">
                        <li class="first">Send Ping</li>
                        <li id="middle">Report Emergency</li>
                        <li id="last">Delivered</li>
                    </ul>

                @endif
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>Message Board </h1></div>

                    @if($key == 1)
                        @php echo 'Your form has successfully been sent.';@endphp

                    @endif

                    @if($key == 2)
                    @php echo 'Your Ping has successfully been deleted.';@endphp

                    @endif

                    @if($key == 3)
                    @php echo 'The ping has been marked as seen by admin';@endphp

                    @endif
                    <p>
                        <a href="{{ route('home') }}">Click here to go back to your home page </a>
                    </p>


                </div>
            </div>
        </div>
    </div>

@endsection