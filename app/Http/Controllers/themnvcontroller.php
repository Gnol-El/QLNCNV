<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class themnvcontroller extends Controller
{
    public function index(){
    	return view('b3.index');
    }
    public function insert(Request $request){
        $userList=DB::table('duan')->paginate(5);
        foreach ($userList as $key ) {
            if($key->TrangT==1){
                $key->TrangT='Hoàn thành';
            }else{
                $key->TrangT='Chưa hoàn thành';
            }
        }

    	$tennv=$request->tennv;
    	$email=$request->email;
    	$matk=$request->matkhau;
        
        $result=DB::table('thanhvien');
        if($result->where('Email',$email) == $email){
            echo '<script type="text/javascript">
                    alert("Email đã tồn tại!");
                </script>';
            return view('b1.index')->with([ 
            'userList'=>$userList
            ]);
        }
        else{
            $result->insert([
                'TenNV'=>$tennv,
                'Email'=>$email,
                'MatK'=>md5($matk),
                'TrangTNV'=>0
            ]);
            return redirect::to('xemthongtin');
        }
    }
}
