<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <form class="form">
        <h2>CONTACT US</h2>
        <p type="Name:"><input placeholder="Write your name here.."></input></p>
        <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
        <button>Send Message</button>
        <div>
            <span class="fa fa-phone"></span>001 1023 567
            <span class="fa fa-envelope-o"></span> contact@company.com
        </div>
    </form>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
