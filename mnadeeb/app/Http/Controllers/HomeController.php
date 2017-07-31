<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\maintenance_orders;
use App\maintenance_type;
use App\service_request;
use App\shops;
use App\User;
use App\user_orders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
}
