<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
</head>
<body class="font-sans antialiased">
<h1>Contact Us any time</h1>
<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Name Please">
    <input type="email" name="email" placeholder="Your Valid Email">
    <textarea name="message" cols="30" rows="10" placeholder="Your Name Please"></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>
