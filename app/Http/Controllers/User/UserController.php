<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Fault;
use App\Models\OrderDetail;

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

            return response()->Json(['durum'=>'1','donenId'=>$createOrder->id],200);
        }
        else {
            return response()->Json(['durum'=>'hata'],200);
        }

    }
    public function List ()
    {
    $orderList=Order::
        where('userId',Auth::user()->id)
            ->with('status','category','fault')
                ->get();
    return view('User.orderList',compact('orderList'));

    }
    public function activateList ()
    {
    $orderList=Order::
        where('userId',Auth::user()->id)
        ->where('statusId','!=',6)
            ->with('status','category','fault')
                ->get();
    return view('User.orderList',compact('orderList'));

    }
    public function delete (Request $request)
    {
        try {
            Order::where('id',$request->id)->delete();
            return response()->Json(['durum'=>'1'],200);
        } catch (Throwable $error) {
            return response()->Json(['durum'=>$error],200);
        }
    }

    public function details ($id)
    {
    $orders=Order::
        where('userId',Auth::user()->id)
            ->where('id',$id)
                ->with('status','category','fault','ordersDetails')
                    ->first();
    $details=OrderDetail::where('orderId',$orders->id)->get();
    foreach ($details as $key => $value) {//bu kod ile bildirim üzerinden de gelse normal şekilde de girse bildirimi okunmuş sayacak

        OrderDetail::where('orderId',$orders->id)->update(['isRead'=>1]);
    }
    return view('User.user_order_details',compact('orders'),compact('details'));

    }



}
