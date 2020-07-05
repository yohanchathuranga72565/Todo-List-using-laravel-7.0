<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ["yohan", 'chathunavo96@gmail.com', "abcd"]);
        // DB::update('update users set name=? where id=1', ['chathuranga']);
        // DB::delete('delete from users where id=1');
        // $users = DB::select('SELECT * FROM users');
        // return $users;
        return view('home');
    }
}
