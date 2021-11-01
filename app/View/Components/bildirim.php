<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class bildirim extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        if (Auth::user()->id==3) {
            $bildirim=OrderDetail::
            where('userId',Auth::user()->id)
            ->with('order')
                ->where('isRead',0)
                    ->get();
            $type=1;

        }
        else
        {
            $bildirim=Order::
                where('isRead',0)
                    ->get();
            $type=2;
        }
        return view('components.bildirim',compact('bildirim'),compact('type'));
    }
}
