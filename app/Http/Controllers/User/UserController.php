<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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
    public function ekle ()
    {
        $category=Category::all();
        $fault=Fault::all();
    return view('User.UrunEkle',compact('category'),compact('fault'));

    }
}
