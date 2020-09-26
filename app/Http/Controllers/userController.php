<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class userController extends Controller
{
    function store(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $data =  DB::insert('insert into user (id,name,phone,email,password) values (?,?,?,?,?)', [null, $name, $phone, $email, $password]);

        if($data){
            return view('login');
        }else{
            return view('registration');
        }
    }

    function logs(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select id from user where email=? and password=?', [$email, $password]);


        if(count($data)){
           return (DB::table('user')->get());
        }else{
            return view('login');
        }
    }
}
