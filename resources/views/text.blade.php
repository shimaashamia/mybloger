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