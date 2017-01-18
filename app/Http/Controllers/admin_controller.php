<?php

namespace App\Http\Controllers;
use DB; //thu vien du lieu
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Validator;

use App\Http\Requests;
use App\Http\Requests\login_admin_request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

class admin_controller extends Controller
{
    //
    public function login()
    {
       //Session::flush();
        if(Session::has('nguoi_dung'))
        {
            return view('pages.quantri')->with('thong_tin_nguoi_dung',Session::get('nguoi_dung'));
        }
        else        
        {return view("pages.login_admin");}
       //return view('pages.quantri');
      //return view('pages.login_admin');
    }
       public function check_login(login_admin_request $request)
    {
       // echo '123';
        $user_profile=DB::table('sysuser')->where('Username',$request->get('username'))->get();
        //$user_profile=DB::select('select * from sysuser where username="administrator"');
        echo $user_profile;
       if(md5($request->get('password'))==$user_profile->Password)
       {
           Session::put("nguoi_dung",$user_profile);
           return view("pages.quantri")->with('thong_tin_nguoi_dung',Session::get('nguoi_dung'));
       }
       else
       {
           $thong_bao = "Tài khoản hoặc mật khẩu không đúng!";
           return view("pages.login_admin")->with('thong_bao',$thong_bao);
       }
        
    }

        public function dang_xuat()
    {
        Session::flush();
        return redirect()->route('admin');
    }

}
