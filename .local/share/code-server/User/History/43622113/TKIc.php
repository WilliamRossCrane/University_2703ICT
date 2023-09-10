<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task4Controller extends Controller
{
    public function greetings()
    {
        $name = request('name');
        $age = (int) request('age');

        return view('greetings.greeting', compact('name', 'age'));
    }

    public function show()
    {
        // Code to display the source file show.php (if needed)
        // ...
    }
}
