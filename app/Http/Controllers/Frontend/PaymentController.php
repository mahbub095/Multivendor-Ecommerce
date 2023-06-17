<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class PaymentController extends Controller
{
    public function index()
    {
         if(!Session::has('address')){
             return redirect()->route('user.checkout');
         }
        return view('frontend.pages.payment');
    }



}
