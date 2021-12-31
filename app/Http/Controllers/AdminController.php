<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\User;
 use App\Models\Category;
 use App\Models\Currency;
 use App\Models\Loan_type;

class AdminController extends Controller
{
    public function all_users()
    {
          
        $users  = User::where('type','user')->where('is_deleted',0)->get();
        return view('Admin.all_users',compact('users'));
    }


    public function user_deactivate($user_id)
    {
        User::where('id',$user_id)->update([
           'status'=>1,
        ]);

        return redirect()->back()->with('msg','User Deactivated');
    }

    public function user_activate($user_id)
    {
        User::where('id',$user_id)->update([
            'status'=>0,
         ]);
 
         return redirect()->back()->with('mssg','User Activated');
    }

    public function user_delete($user_id)
    {
        
        User::where('id',$user_id)->update([
            'is_deleted'=>1,
         ]);
 
         return redirect()->back()->with('msg','User Deleted');
    }

    public function categories()
    {
        $categorys = Category::where('is_deleted',0)->get();

        return view('Admin.categories',compact('categorys'));
    }

    public function add_category(Request $request)
    {
       
        $category = new Category();
        $category->name = $request->name;
        $category->contribution = $request->contribution;
        $category->timeline = $request->date;
        $category->currency_id = $request->currency;
        $category->save();

        return redirect()->back()->with('mssg','Category Added');
    }

    public function edit_category(Request $request,$category_id)
    {
        Category::where('id',$category_id)->update([
            'name' =>$request->name,
            'contribution'=> $request->contribution,
             'timeline'=>$request->date,
             'currency_id'=>$request->currency,

        ]);
        return redirect()->back()->with('mssg','Category Updated');

    }

    public function category_active_deactive($category_id)
    {
         $category_detail = Category::where('id',$category_id)->first();

         if($category_detail->status == 0)
         {
            Category::where('id',$category_id)->update([
                'status'=>1,
             ]);
     
             return redirect()->back()->with('msg','Category DeActivated');
         }
         else
         {
            Category::where('id',$category_id)->update([
                'status'=>0,
             ]);
     
             return redirect()->back()->with('mssg','Category Activated');
         }
    }

    public function delete_category($category_id)
    {
        Category::where('id',$category_id)->update([
            'is_deleted'=>1,
         ]);
 
         return redirect()->back()->with('msg','Category Deleted');
    }

    public function currency()
    {
        $currencies = Currency::where('is_deleted',0)->get();
        return view('Admin.currency',compact('currencies'));
    }

    public function add_currency(Request $request)
    {
      
        $currency = new Currency();
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        $currency->state = $request->state;
        $currency->save();

        return redirect()->back()->with('mssg','Currency Added');

    }

    public function edit_currency(Request $request,$currency_id)
    {
      
        Currency::where('id',$currency_id)->update([
            'name' => $request->name,
            'symbol' => $request->symbol,
            'state' => $request->state,

        ]);
       
    
        return redirect()->back()->with('mssg','Currency Updated');

    }

    public function active_deactive_curreny($currency_id)
    {
          $currency_detail = Currency::where('id',$currency_id)->first();

          if($currency_detail->status == 0)
          {

            Currency::where('id',$currency_id)->update([
              'status'=>1
            ]);

            return redirect()->back()->with('msg','Currency DeActivated');
          }
          else
          {
            Currency::where('id',$currency_id)->update([
                'status'=>0
              ]);

              return redirect()->back()->with('mssg','Currency Activated');
          }
    }

    public function delete_currency($currency_id)
    {
        Currency::where('id',$currency_id)->update([
            'is_deleted'=>1
          ]);

          return redirect()->back()->with('msg','Currency Deleted');

    }

    public function loan_types()
    {
        $loan_types = Loan_type::where('is_deleted',0)->get();
        return view('Admin.loan_types',compact('loan_types'));
    }

    public function add_loanType(Request $request)
    {
        $loan_type = new Loan_type();
        $loan_type->product_loan = $request->product_loan;
        $loan_type->cash_loan = $request->cash_loan;
        $loan_type->save();

        return redirect()->back()->with('mssg','Loan Added');
    
    }

    public function edit_loanType(Request $request,$loan_id)
    {
        Loan_type::where('id',$loan_id)->update([
          'product_loan'=>$request->product_loan,
          'cash_loan'=> $request->cash_loan

        ]);
      
        return redirect()->back()->with('mssg','Loan Updated');
    
    }

    public function loan_active_deactive($loan_id)
    {
        $loan_details = Loan_type::where('id',$loan_id)->first();

        if($loan_details->status == 0)
        {
            Loan_type::where('id',$loan_id)->update([
            'status'=>1
            ]);

            return redirect()->back()->with('msg','DeActivated');
        }
        else
        {
            Loan_type::where('id',$loan_id)->update([
                'status'=>0
                ]);

                return redirect()->back()->with('mssg','Activated');
        }
    }

    public function delete_type($loan_id)
    {
        Loan_type::where('id',$loan_id)->update([
            'is_deleted'=>1
            ]);
            return redirect()->back()->with('msg','Deleted');
    }




}
