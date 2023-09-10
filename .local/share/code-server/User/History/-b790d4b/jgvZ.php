@extends('layouts.app')

@section('title', 'Greeting Form')

@section('content')
    <form method="get" action="{{ route('greetings') }}">
        <table>
            <tr>
                <td>Your name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Your age:</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
@endsection
