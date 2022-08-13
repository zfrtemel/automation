<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service\YetkiliController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Auth::user()->roleId === 2 ?
            (new YetkiliController)->index() :
            view('home');
    }
}
