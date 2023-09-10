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

    public function showSource()
    {
        $file = request('file');
        if (empty($file) || $file == "") {
            return "Missing filename.";
        }

        if (strncmp($file, "/", 1) == 0 || strstr($file, "../")) {
            return "File name is not allowed: $file.";
        }

        $file = EscapeShellCmd(substr($file, 0, 40));

        if (!file_exists($file) || !is_file($file)) {
            return "File not found or not printable: $file.";
        }

        $fp = fopen($file, "r");
        if ($fp == FALSE) {
            return "Couldn't open file: $file.";
        }

        $content = "<pre>\n";
        while (!feof($fp)) {
            $content .= htmlspecialchars(fgets($fp, 4096));
        }
        fclose($fp);
        $content .= "</pre>\n";

        return $content;
    }
}
