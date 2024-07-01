<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class auth extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function register(Request $request){
        $input = $request->validate(['name'=>'reqiured',
                                        'password'=>'required']);

        $new = new User;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);
        $new->address = $request->address;
        $new->card_num = $request->card_num;
        $new->save();

        return redirect('/');
    }

    public function loginIn(Request $request){
        $input = $request->validate(['name'=>'reqiured',
        'password'=>'required']);
        if(auth('web')->attempt($input)){
            $request->session()->regenrate();
            return redirect('/');

        }
        else{
            return redirect()->back();
        }
    }
}
