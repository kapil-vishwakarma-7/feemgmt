<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
use App\Course;
use App\Enquiry;
use App\Fees;

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
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return view('home');
    }
    public function index()
    {
        $en = Enquiry::count();
        $cn = Course::count();
        $sn = Admission::count();
        $data = ['en'=>$en,'cn'=>$cn,'sn'=>$sn];

        return view('index',['data'=>$data]);
    }
}
