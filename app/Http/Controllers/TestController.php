<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'Võ Thuý Vii ne';
        // dd(123);
    }
    public function user(string $id)
    {
        $user = 'User ' . $id;
        // echo $user;
        return view('test')->with(compact('user'));

    }

}
