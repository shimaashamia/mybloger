@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
        <label for="usr">Title:</label>
        {{$articles->title}}
    </div>
    <div class="form-group">
        <label for="usr">body:</label>
        {{$articles->body}}
    </div>
    <div class="form-group">
    <table class="table table-striped">
        <tr>
            <td>comments</td>
        </tr>


        <!DOCTYPE html>
        <head>
            <title>Pusher Test</title>
            <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
            <script>

                // Enable pusher logging - don't include this in production
                Pusher.logToConsole = true;

                var pusher = new Pusher('dc22364468bb6ca48c74', {
                    cluster: 'ap2',
                    forceTLS: true
                });

                var channel = pusher.subscribe('text-channel');
                channel.bind('text-event', function(data) {
                    alert(JSON.stringify(data));
                    //console.log(data);
                });
            </script>
        </head>
        <body>
        <h1>Pusher Test</h1>
        <p>
            Try publishing an event to channel <code>my-channel</code>
            with event name <code>my-event</code>.
        </p>
        </body>



        @foreach ($articles->comments as $c)
        <tr>
            <td> {{Auth::user()->name}} </td></tr>
        <tr>
            <td> {{$c->comment}} </td>
        </tr>


         @endforeach




    </table>
    <form action="/read/{{$articles->id}}" method="POST">
        {{csrf_field()}}
         <div class="form-group">
            <label for="usr">body:</label>
            <textarea rows="4" cols="50" name="body" class="form-control">
            </textarea>
        </div>
        <!-- <div class="form-group">
            <label for="usr">body:</label>
            <textarea rows="4" cols="50" name="body" class="form-control"">
                
            </textarea>
        </div> -->
    </br>
    <input type="submit" value="add comment" class="btn btn-primary">
    </form>
</div>
@endsection
