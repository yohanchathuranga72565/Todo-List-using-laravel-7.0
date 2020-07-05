<?php

namespace App\Http\Controllers;
use App\User;
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


        // $user = new User();
        // $user->name = "Yohan";
        // $user->email = "yohan@gmail.com";
        // $user->password = bcrypt("abcd");
        // $user->save();

        // $user = User::all();
        // return $user;

        // User::where('id', 3)->update(['name'=>'chathuranga']);

        // User::where('id', 2)->delete();

        // $data = [
        //     "name"=>'Navodya',
        //     "email" => "navodya@gmail.com",
        //     "password" => bcrypt('abcd')
        // ];
        // User::create($data);
        $user = User::all();
        return view('home')->with('users', $user);
    }
}
