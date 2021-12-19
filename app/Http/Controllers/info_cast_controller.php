<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CUser;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
use App\Models\package;

class info_cast_controller extends Controller
{
    public function  login(Request $req){
       // return Str::random(64);
        $user = CUser::where('email',$req->email)->where('password',$req->password)->first();
       
        if($user){
            //return $user;
            $api_token = Str::random(64);
            $token = new Token();
            $token->email = $user->email;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
            
        }
        return "No user found";

    }
    public function kplist(){
         $products =package::where('category','Kid')->get();

        return $products;
    }
    public function gplist(){
        $products =package::where('category','Gamers')->get();

       return $products;
   }
   public function splist(){
    $products =package::where('category','Student')->get();

   return $products;
   }
   public function soplist(){
    $products =package::where('category','Special offers')->get();

   return $products;
}
}
