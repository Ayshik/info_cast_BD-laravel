<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CUser;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;
use App\Models\package;
use App\Models\requestpack;
use App\Models\modarator;
use App\Models\user;
use App\Models\complainbox;
use App\Models\payment_history;


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
public function Addmodarator(Request $req){
    
    $addmod = new modarator();
    $addmod->name = $req->name;
    $addmod->email = $req->email;
    $addmod->password = $req->password;
    $addmod->address = $req->address;
    $addmod->phone = $req->phone;
    
  
    $addmod->save();
    if($addmod->save()) return "Successful";
}



public function User_payment(Request $req){
    
    $addmod = new payment_history();
    $addmod->c_name = $req->c_name;
    $addmod->c_email = $req->c_email;
    $addmod->phone = $req->phone;
    $addmod->payment_method = $req->payment_method;
    $addmod->amount = $req->amount;
    $addmod->month = $req->month;
    $addmod->time = new DateTime();
    
  
    $addmod->save();
    if($addmod->save()) return "Successful";
}


public function User_RP(Request $req){
    
    $addmod = new payment_history();
    $addmod->c_email = $req->c_email;
    $addmod->subject = $req->subject;
    $addmod->report = $req->report;
    $addmod->time = new DateTime();
    $addmod->status = $req->status;
    
  
    $addmod->save();
    if($addmod->save()) return "Successful";
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

    public function package_details()
    {
        $products = package::all();


       
        return $products;
        
        
    }

    
    public function deletepackage($id)
    {
     $products = package::find($id);
     if($products)
     {
     $products->delete();
   
    }

        }






        public function modarator_info()
        {
            $products = modarator::all();
    
    
           
            return $products;
            
            
        }
    

        public function customer_info()
        {
            $products = user::all();
    
    
           
            return $products;
            
            
        }

        public function payment_history()
        {
            $products = payment_history::all();
    
    
           
            return $products;
            
            
        }





        
        public function deletemod($id)
        {
         $products = modarator::find($id);
         if($products)
         {
         $products->delete();
       
        }
    
            }
    



            public function edit_package($id)
            {
             $products = package::find($id);
             if($products)
             {
             return $products;
           
            }
        
                }



                public function updatepackage(Request $req,$id){

                    $products = package::find($id);
                if($products)
                {
                
                   
                   
                    $products->name = $req->name;
                    $products->speed = $req->speed;
                    $products->pricinglock = $req->pricinglock;
                    $products->price = $req->price;
                    $products->category = $req->category;
                    $products->update();
                   
                    }
                                }






                                public function complainbox(){
                                    $products =complainbox::where('status','unread')->get();
                           
                                   return $products;
                               }





                               public function read($id){

                                $products = complainbox::find($id);
                            
                            
                               
                                $products->status = 'read';
                               
                                $products->update();
                          
                                            }




                                            public function modarator_profile_update(Request $req,$id){

                                                $products = modarator::find($id);
                                            if($products)
                                            {
                                            
                                               
                                               
                                                $products->name = $req->name;
                                                $products->email = $req->email;
                                                $products->password = $req->password;
                                                $products->address = $req->address;
                                                $products->phone = $req->phone;
                                                $products->update();
                                               
                                                }
                                                            }


                                                            public function modarator_profile($id){
                                                                $products = modarator::find($id);
                                                            // $products = modarator::where('email',$id)->get();
                                                               return $products;
                                                                                        }

    }