<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CUser;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
use App\Models\package;
use App\Models\requestpack;



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
            $token->type = $user->type;
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

public function requestpack(Request $req){
    
    $requestpack = new requestpack();
    $requestpack->name = $req->name;
    $requestpack->company = $req->company;
    $requestpack->email = $req->email;
    $requestpack->phone = $req->phone;
    $requestpack->country = $req->country;
    $requestpack->address = $req->address;
    $requestpack->city = $req->city;
    $requestpack->state = $req->state;
    $requestpack->postcode = $req->postcode;
    $requestpack->packagename = $req->packagename;
    $requestpack->packageprice = $req->packageprice;
    $requestpack->totalprice = $req->totalprice;
    $requestpack->status = $req->status;
  
    $requestpack->save();
    if($requestpack->save()) return "Successful";
}

public function Addpackages(Request $req){
    
    $requestpack = new package();
    $requestpack->name = $req->name;
    $requestpack->speed = $req->speed;
    $requestpack->pricinglock = $req->pricinglock;
    $requestpack->price = $req->price;
    $requestpack->category = $req->category;
    
  
    $requestpack->save();
    if($requestpack->save()) return "Successful";
}


public function crequest(){
    $products =requestpack::where('status','pending')->get();

   return $products;
}

public function unpaid(){
    $products =requestpack::where('status','unpaid')->get();

   return $products;
}

public function paid(){
    $products =requestpack::where('status','paid')->get();

   return $products;
}
public function cconnection(){
    
    $products =requestpack::where('lstatus','Active')->get();
   return $products;
}
public function updatestatus($id){

    $products = requestpack::find($id);
if($products->lstatus=="Active")
{

    $products->lstatus = 'Inactive';
   
    $products->update();
}
else{

    $products->lstatus = 'Active';
   
    $products->update();

    }
                }

                
public function inactive(){
    $products =requestpack::where('lstatus','Inactive')->get();

   return $products;
                            }


public function updatepayment($id){

    $products = requestpack::find($id);
if($products->status=="paid")
{

    $products->lstatus = 'Inactive';
    $products->status = 'unpaid';
   
    $products->update();
}
else{

    $products->lstatus = 'Active';
    $products->status = 'paid';
    $products->update();

    }
                }



                
                public function all(){
                    $products =requestpack::where('status','!=','pending')->get();
                
                   return $products;
                                            }
                






                                            public function updatereq($id){

                                                $products = requestpack::find($id);
                                            if($products->status=="pending")
                                            {
                                            
                                               
                                            
                                                $products->lstatus = 'Active';
                                                $products->status = 'paid';
                                                $products->update();
                                            
                                                }
                                                            }
                                            


     public function deletereq($id)
    {
     $products = requestpack::find($id);
     if($products)
     {
     $products->delete();
   
    }

    }

}
