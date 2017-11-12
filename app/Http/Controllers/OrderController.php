<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orders($type='')
    {
        if($type=='pending')
        {
            $orders=Order::where('delivered','0')->get();
        }
        elseif ($type='delivered')
        {
            $orders=Order::where('delivered','1')->get();
        }


    }
}
