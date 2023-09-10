<!DOCTYPE html>
<html>
<head>
    <title>Web Programming Examples</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../wp.css">
</head>
<body>
    <form method="get" action="{{ route('greetings') }}">
        @csrf
        <table>
            <tr>
                <td>Your name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Your age:</td>
                <td><input type="text" name="age"></
