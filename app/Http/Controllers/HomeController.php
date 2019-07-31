<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        //  dd($users);
        return view('home', compact('users'));
    }

    public function test()
    {
        $test = 1 + 2;
        $test2 = $this->test2();
        $test3 = $this->test3(55, 88);
        $test4 = $this->test4();
        $switch = $this->switch();
        return view('testing.index', compact('test', 'test2', 'test3', 'test4', 'switch'));
    }

    public function test2()
    {
         return 1 + 5;
    }
    public function test3($param1, $param2)
    {
        return $param1 * $param2;
    }
    public function test4($type = "World")
    {
        return "Hello $type\n";
    }

    public function switch()
    {

        return "green";
    }
}

    
