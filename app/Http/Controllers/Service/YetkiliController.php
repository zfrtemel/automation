<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;//gün işlemleri için gerekli
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Fault;
use App\Http\Middleware\UserRole;
use App\Models\OrderDetail;

class YetkiliController extends Controller
{

    public function index()
    {
        $orderList=count(Order::where('created_at','>=',Carbon::now()->subDays(30))->get());
        $finishOrders=count(Order::where('created_at','>=',Carbon::now()->subDays(30))->where('statusId',6)->get());
        $userOrder=count(Order::where('created_at','>=',Carbon::now()->subDays(30))->where('userId',Auth::user()->id)->where('statusId',6)->get());
        $weekOrder=count(Order::where('created_at','>=',Carbon::now()->subDays(7))->get());
        return view('Service.index'
            ,compact('orderList')
            ,compact('weekOrder')
            ,compact('userOrder')
                ,compact('finishOrders'));
    }

}
