<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Fault;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index ()
    {
    return view('home');

    }
    public function ekleview ()
    {
        $category=Category::all();
        $fault=Fault::all();
    return view('User.UrunEkle',compact('category'),compact('fault'));

    }
    public function eklePost (Request $request)
    {
        $result=$request->all();
      $createOrder=  Order::Create([
            'name'=>$request->name,
            'userId'=>Auth::user()->id,
            'statusId'=>1,
            'categoryId'=>$request->categoryId,
            'faultId'=>$request->faultId,
            'customerNote'=>$request->customerNote,
        ]);
        if ($createOrder) {

            return response()->Json(['durum'=>'1'],200);
        }
        else {
            return response()->Json(['durum'=>'hatalı'],200);
        }

    }
    public function List ()
    {
    $orderList=Order::where('userId',Auth::user()->id)->get();
    return view('User.orderList',compact('orderList'));

    }
}
