<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatting</title>

    <link rel="stylesheet" href="{{ asset('message/css/app.css') }}" />
</head>
<body>
    <div class="app">

        <header>
            <h1>Let's talk</h1>
            <input type="text" name="username" id="username" placeholder="Please enter your username..." />
        </header>

        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message..." />
            <button type="submit" id="message_send">Send Message</button>
        </form>

    </div>

    <script src="{{ asset('./js/app.js') }}"></script>
</body>
</html>
