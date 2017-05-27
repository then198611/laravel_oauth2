<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth.admin');
//    }

    public function index(){
        $user = Auth::guard('admin')->user();
        return view('admin.index');
    }
}