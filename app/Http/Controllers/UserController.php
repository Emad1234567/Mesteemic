<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
Use App\Models\Category;
Use App\Models\ProductCategory;

class UserController extends Controller
{
    //

    public function Dashboard(){

        return view('User.Dashboard');
    }

    public function selectCategory(Request $request){
        $categories = Category::where('is_deleted',0)->get();
        // dd($categories);

        return view('User.selectCategory',compact('categories'));
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

    public function site_products(Request $request){
        // TODO: we will control UI with Multiple Image Single Image and No image

        $categories = ProductCategory::where('status','active')->get();
        return view('Product.list',compact('categories'));
    }

}


