<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function search(Request $request)
   {

    $q =  $request->q;
    $user = User::where('name','LIKE','%'.$q.'%')
                ->orWhere('phone','LIKE','%'.$q.'%')
                ->orWhere('address','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
    {
        if(count($user) > 1)
        {
            return view ('welcome')->withMessage('We Got More Then one Data! You Can Search By Number in Below for Your Targeted Person')->withmoredetails('');
            
        }else
        {
            return view('welcome')->withDetails($user)->withQuery ( $q );
        }
        
    }
    else
    {
         return view ('welcome')->withMessage('No Details found. Try to search again !'); 
    }
    }

    public function search_By_number(Request $request)
    {
        $q =  $request->q;
    $user = User::where('name','LIKE','%'.$q.'%')
                ->orWhere('phone','LIKE','%'.$q.'%')
                ->orWhere('address','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
    {
        if(count($user) > 1)
        {
            return view ('welcome')->withMessage('There is More Then one Data! Please Search The Full Number for Your Targeted Person')->withmoredetails('');
            
        }else
        {
            return view('welcome')->withDetails($user)->withQuery ( $q );
        }
        
    }
    else
    {
         return view ('welcome')->withMessage('No Details found. Try to search again !'); 
    }
    }
}
