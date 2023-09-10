<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../wp.css">
</head>
<body>
    <p>
    Hello {{ htmlspecialchars($name) }}.
    Next year, you will be {{ (int)$age + 1 }} years old.
    </p>
    <hr>
    <p><a href="{{ route('source', ['file' => 'greeting.blade.php']) }}">Source</a></p>
</body>
</html>
