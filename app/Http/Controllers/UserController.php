<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            // $request->session()->flash('message','Image uploaded.');
            return redirect()->back()->with('message','Image Uploaded.'); //success msg
        }
        // $request->session()->flash('error','Image not uploaded.');
        return redirect()->back()->with('error','Image not uploaded.'); //error msg
        // 
    }
    
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
        //     "email" => "navodya11@gmail.com",
        //     "password" => 'abcd'
        // ];
        // User::create($data);
        $user = User::all();
        return $user;
        return view('home');
    }
}
