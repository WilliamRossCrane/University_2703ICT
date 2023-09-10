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

    public function show()
    {
        $file = 'task4/greeting.blade.php';
        // Check file exists
        if (!file_exists($file) || !is_file($file)) {
            echo "File not found or not printable: $file.<br>\n";
            exit;
        }

        // Attempt to open file
        $fp = fopen($file, "r");
        if ($fp == FALSE) {
            echo "Couldn't open file: $file.<br>\n";
            exit;
        }

        // print lines of the file
        echo "<pre>\n";
        while (!feof($fp)) {
            echo htmlspecialchars(fgets($fp, 4096));
        }
        fclose($fp);
        echo "</pre>\n";
    }
}
