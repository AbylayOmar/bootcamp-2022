<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test() {
        $count = 100;
        $users = ["John", 'Michiel', 'A', 'B', 'C'];
        return view('test')->with(['count' => $count, 'users' => $users]);
    }

    public function result() {
        return view('result');
    }
}
