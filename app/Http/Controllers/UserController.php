<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        // DB::insert('insert into users (name,email,password) values (?, ?, ?)', [
        //     'Dayle',
        //     'Dayle@test.com',
        //     'password'
        // ]);
        // $users = DB::select('select * from users');
        // return $users;
        DB::update('update users set name = ? where id = 1', ['Bitfumes']);
        return view('home');
    }
}
