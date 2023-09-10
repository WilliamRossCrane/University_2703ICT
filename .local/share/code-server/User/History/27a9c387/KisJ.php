<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../wp.css">
</head>
<body>
    <p>Hello {{ htmlspecialchars($name) }}.</p>
    <p>Next year, you will be {{ $age + 1 }} years old.</p>
    <hr>
    <p><a href="{{ route('greetings') }}">Back</a></p>
</body>
</html>
