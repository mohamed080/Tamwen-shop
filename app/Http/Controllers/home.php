<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){

        return view('home');
    }


    public function getCardVlaue(){
        $user = User::find(auth('web')->id());
        $card = $user->card_count;
        $value = 0;
        for($i =0 ;$i > $card;$i++ ){
            if($X <= 4){
                $value += 50;
            }elseif($x > 4 ){
            $value += 25;
        }
        }
        return $value;
    }


    public function Check_Oil_sugar(){
        $cart = Session::get('cart');
        $oilCount = 0;
        $sugarCount = 0;

        foreach ($cart as $k) {
            $product = product
        }
    }


}
