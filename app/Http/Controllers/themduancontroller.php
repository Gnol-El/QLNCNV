<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
class themduancontroller extends Controller
{
    public function index(){

    	return view('b4.index');
    }
    public function insertDA(Request $request){
    	$mada=$request->mada;
    	$tenda=$request->tenda;
    	$songay=$request->songay;
    	$sonv=$request->sonv;
        $luongcb=$request->luongcb;
        for($i=0;$i<$sonv;$i++){
          $result=DB::table('thanhvien')->where('TrangTNV',0)->first();
            if(empty($result)){break;}
        	else{
            	DB::table('congviec')->insert([
		    		'MaNV'=>$result->MaNV,
		    		'MaDA'=>$mada,
		    		'LuongNV'=>0
		    	]);
		    	DB::table('thanhvien')->where('MaNV',$result->MaNV)->update([
		    		'TrangTNV'=>1
		    	]);
            }
  	  	}
    	DB::table('duan')->insert([
    		'MaDA'=>$mada,
    		'TenDA'=>$tenda,
    		'SoNHT'=>$songay,
    		'SoNV'=>$sonv,
    		'LuongCB'=>$luongcb,
    		'TrangT'=>0
    	]);
    	return redirect::to('xemthongtin');
    }
}
