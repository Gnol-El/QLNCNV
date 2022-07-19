<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
class xemluongnvcontroller extends Controller
{
    public function index(){
    	$result=DB::table('thanhvien')->join('congviec','thanhvien.MaNV','=','congviec.MaNV')->select('thanhvien.MaNV','thanhvien.TenNV',DB::raw('SUM(congviec.LuongNV) as luong'))->groupBy('thanhvien.MaNV','thanhvien.TenNV')->get();

    /*	foreach ($result as $key) {

    		$result2=DB::table('thanhvien')->join('congviec','thanhvien.MaNV','=','congviec.MaNV')->select('thanhvien.MaNV','thanhvien.TenNV',DB::raw('SUM(congviec.LuongNV) as luong'))->where('congviec.MaNV',$key->MaNV)->groupBy('thanhvien.MaNV','thanhvien.TenNV')->get();

    	}*/
    	return view('b2.index',['KAA'=>$result]);
    }
    public function chitiet($MaNV){
    	$result = DB::table('duan')->join('congviec','congviec.MaDA','=','duan.MaDA')->where('congviec.MaNV',$MaNV)->get();
    	$result2=DB::table('thanhvien')->join('congviec','thanhvien.MaNV','=','congviec.MaNV')->select('thanhvien.MaNV','thanhvien.TenNV',DB::raw('SUM(congviec.LuongNV) as luong'))->groupBy('thanhvien.MaNV','thanhvien.TenNV')->having('thanhvien.MaNV',$MaNV)->get();
        $result3=DB::table('thanhvien')->where('MaNV',$MaNV)->get();
    	return view('b2.chitiet',['KAA'=>$result,'KOO'=>$result2,'ten'=>$result3]);
    }
    public function del($MaNV){
        $result=DB::table('thanhvien')->where('MaNV',$MaNV);
        $result2 = DB::table('congviec')->where('congviec.MaNV',$MaNV);
        $result->delete();
        $result2->delete();
        return redirect::to('xemluong');
    }
}
