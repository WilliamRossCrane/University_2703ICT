<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task4Controller extends Controller
{
    public function greetings(Request $request)
    {
        $name = $request->input('name');
        $age = (int) $request->input('age');

        return view('task4.greeting', compact('name', 'age'));
    }

    public function show()
    {
        // Code to display the source file show.php (if needed)
        // ...
    }
}
