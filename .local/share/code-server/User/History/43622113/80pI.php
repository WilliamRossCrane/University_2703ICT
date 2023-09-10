<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task4Controller extends Controller
{
    public function greetings()
    {
        $name = request('name');
        $age = (int)request('age');

        return view('task4.greeting', compact('name', 'age'));
    }
}
