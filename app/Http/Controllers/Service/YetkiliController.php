<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon; //gün işlemleri için gerekli
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Fault;
use App\Models\Status;
use App\Http\Middleware\UserRole;
use App\Models\OrderDetail;

class YetkiliController extends Controller
{

    public function index()
    {
        $orderList = count(Order::where('created_at', '>=', Carbon::now()->subDays(30))->get());
        $finishOrders = count(Order::where('created_at', '>=', Carbon::now()->subDays(30))->where('statusId', 6)->get());
        $userOrder = count(Order::where('created_at', '>=', Carbon::now()->subDays(30))->where('userId', Auth::user()->id)->where('statusId', 6)->get());
        $weekOrder = count(Order::where('created_at', '>=', Carbon::now()->subDays(7))->get());

        return view(
            'Service.index',
            compact('orderList'),
            compact('weekOrder')
        )->with('finishOrders', $finishOrders)->with('userOrder', $userOrder);
    }
    public function orderALL()
    {
        $orderList = Order::with('status', 'category', 'fault')->get();
        return view('Service.orderList', compact('orderList'));
    }
    public function finishList()
    {
        $orderList = Order::where('statusId', 6)->with('status', 'category', 'fault')->get();
        return view('Service.orderList', compact('orderList'));
    }
    public function activateOrder()
    {
        $orderList = Order::where('statusId', '!=', 6)->with('status', 'category', 'fault')->get();
        return view('Service.orderList', compact('orderList'));
    }


    public function details($id)
    {
        $orders = Order::where('id', $id)
            ->with('status', 'category', 'fault', 'ordersDetails')
            ->first();
        $details = OrderDetail::where('orderId', $orders->id)->get();
        $orders->isRead = 1;
        $orders->save();
        $status = Status::All();
        return view('Service.details', compact('orders'), compact('details'))->with('status', $status);
    }



    function islemEkle(Request $Request)
    {
        try {
            Order::where('id', $Request->orderId)->update(['statusId' => $Request->statusId]);
            OrderDetail::Create(
                [
                    'processNote' => $Request->processNote,
                    'orderId' => $Request->orderId,
                    'userId' => Auth::user()->id,
                ]
            );
            $data = 1;
            return response()->json($data, 200);
        } catch (Throwable $hata) {
            return response()->json($hata, 200);
        }
    }


    public function delete($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->back();
    }
}
