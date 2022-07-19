<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class UserController extends Controller
{
    public function index(){
    	$MaNV = Session::get('id');
        $result = DB::table('duan')->join('congviec','congviec.MaDA','=','duan.MaDA')->where('congviec.MaNV',$MaNV)->get();
    	$result2=DB::table('thanhvien')->join('congviec','thanhvien.MaNV','=','congviec.MaNV')->select('thanhvien.MaNV','thanhvien.TenNV',DB::raw('SUM(congviec.LuongNV) as luong'))->groupBy('thanhvien.MaNV','thanhvien.TenNV')->having('thanhvien.MaNV',$MaNV)->get();
        $result3=DB::table('thanhvien')->where('MaNV',$MaNV)->get();
    	return view('user.xemduan',['duan'=>$result,'sum'=>$result2,'ten'=>$result3]);
    }
    public function info(){
    	$MaNV = Session::get('id');
    	$res=DB::table('thanhvien')->where('MaNV',$MaNV)->get();
    	return view('user.inforUser',['KAA'=>$res]);
    }
}
