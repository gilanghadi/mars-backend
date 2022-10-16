<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function home()
    {
        return view('home');
    }
    public function absen()
    {
        return view('dashboard.absen');
    }
    public function detail()
    {
        return view('dashboard.detail');
    }
}