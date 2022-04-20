<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirect()
    {
       if (Auth::id())
       {
           if (Auth::user()->utype == 'ADM')
           {
               return view("dashboard.admin.index");
           }

           else
           {
               return view("dashboard.normal.index");

           }
       }
       else

       {
           return redirect()->back();

       }


    }
}

