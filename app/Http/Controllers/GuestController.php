<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{

   public function test()
   {
       return redirect('user_register');
   }

   public function register_view()
   {
       return view('register');
   }

    public function user_register(Request $request)
    {
        
        $user_count = User::where('email',$request->email)->count();
        if($user_count < 1){
           
         $user =  User::create([
            'first_name'=>$request->name,
            'last_name'=>$request->last_name,
            'username'=>$request->user_name,
            'email' => $request->email,
            'type'=>'user',
            'password' => Hash::make($request->password),
        ]);
       
        return redirect('/login')->with('msg','Registerd Successfull Now LogIn');
    }
    else
    {
        return redirect()->back()->with('msg','Email is already in use');
    }
     
    }
}
