<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class UserController extends Controller
{
    //
    public function selectCategory(Request $request){
        return view('User.selectCategory');
    }

    public function myProfile(Request $request){

        return view('User.myProfile');
    }

    public function chat(Request $request){

        return view('User.chatPage');
    }

    public function mySubscription(Request $request){

        return view('User.mySubscription');
    }


    public function myTickets(Request $request){

        return view('User.myTickets');
    }

    public function ApplyLoan(Request $request){

        return view('User.Applyloan');
    }


    public function LoanRequest(Request $request){

        return view('User.loanApplication');
    }

}


