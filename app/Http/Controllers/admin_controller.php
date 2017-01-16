<?php

namespace App\Http\Controllers;
use DB; //thu vien du lieu
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Validator;

use App\Http\Requests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

class admin_controller extends Controller
{
    //
    public function welcome()
    {
        return view("pages.trangchao");
    }
        public function welcome2()
    {
       echo "2222222";
    }
}
