<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.header');
    }
    public function show_dashboard(Request $request){
        $name = Session::get('name');
        $id = Session::get('id');
        if(!empty($name) and !empty($id)){
            return redirect::to('xemthongtin');
        }
    	else{
            Session::put('message','Bạn chưa đăng nhập!');
            return redirect()->route(Session::get('prev'));
        }
    }
    public function dashboard(Request $request){
    	$email = $request->email;
    	$password = md5($request->password);

    	$result = DB::table('thanhvien')->where('Email',$email)->where('MatK',$password)->first();
    	/*return view('admin.dashboard');*/
    	if ($result)
        {	
            if(!empty($request->remember)){
                setcookie('email_cookie',$request->email,time()+(30));
                setcookie('password_cookie',$request->password,time()+(30));
            }
            else{
                if (isset($_COOKIE['email_cookie'])) {
                    setcookie('email_cookie','');
                }
                if (isset($_COOKIE['password_cookie'])) {
                    setcookie('password_cookie','');
                }
            }
        	if($result->ChucV == 1)
        	{	
        		Session::put('name',$result->TenNV);
        		Session::put('id',$result->MaNV);
            	return redirect::to('xemthongtin');
	        }else{
                Session::put('name',$result->TenNV);
                Session::put('id',$result->MaNV);
                return redirect::to('xemduan');
	        }	
            
        }else{	
        	Session::put('message','Tên tài khoản hoặc mật khẩu không chính xác!');
			return redirect()->route(Session::get('prev'));
		}
	}
    public function logout(){
        Session::put('name',null);
        Session::put('id',null);
        return redirect()->route(Session::get('prev'));  
    }
}
