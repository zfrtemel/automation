<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class bildirim extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        $bildirim=OrderDetail::
        where('userId',Auth::user()->id)
        ->with('order')
            ->where('isRead',0)
                ->get();
        return view('components.bildirim',compact('bildirim'));
    }
}
