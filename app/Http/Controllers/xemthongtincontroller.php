<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class xemthongtincontroller extends Controller
{
    public function index(/*Request $request*/){
        $name = Session::get('name');
        $id = Session::get('id');
        if($name=='Admin' and $id=='1'){
            $userList=DB::table('duan')->paginate(5);
            /*$a=$request->hoanthanh;

            if($a==0){
                DB::table('duan')->update([
                    'TrangT'=>0
                ]);
            }*/
          /* if($userList->TrangT==1){
                $userList->TrangT='Hoàn Thành';

            }else{
                $userList->TrangT='Chưa Hoàn Thành';
            }*/
            foreach ($userList as $key ) {
                if($key->TrangT==1){
                    $key->TrangT='Hoàn thành';
                }else{
                    $key->TrangT='Chưa hoàn thành';
                }
            }
          
            return view('b1.index')->with([ 
                'userList'=>$userList
                ]);
        }
        else{
            if(!empty($name) and !empty($id)){
                Session::put('message', 'Không đủ thẩm quyền!');
            }
            else{
                Session::put('message','Bạn chưa đăng nhập!');
            }
            return redirect()->route(Session::get('prev'));
        }

    }
    public function index2($MaDA){
    	
    	$result=DB::table('duan')->where('MaDA',$MaDA)->first();
    	if($result->TrangT==0){
    		DB::table('duan')->where('MaDA',$MaDA)->update([
    			'TrangT'=>1
    		]);
            
    	}
        $songay = $result->SoNHT;
        $luongcb=$result->LuongCB;
        $kq = $songay*$luongcb;
        DB::table('congviec')->where('MaDA',$MaDA)->update([
            'LuongNV' => $kq
        ]);

        $result1=DB::table('congviec')->where('MaDA',$MaDA)->get();
        foreach ($result1 as $key) {
            DB::table('thanhvien')->where('MaNV',$key->MaNV)->update(['TrangTNV'=>0]);
        }
       /* DB::table('thanhvien')->join('congviec','thanhvien.MaNV','=','congviec.MaNV')->where('MaNV',$result->MaNV)->update([
            'TrangTNV'=>0  
             ]);*/

        $userList=DB::table('duan')->paginate(5);
        foreach ($userList as $key ) {
            if($key->TrangT==1){
                $key->TrangT='Hoàn thành';
            }else{
                $key->TrangT='Chưa hoàn thành';
            }
        }
    	return view('b1.index')->with([    
            'userList'=>$userList
            ]);
    		
    }
    public function index3($MaDA){
        $result=DB::table('duan')->where('MaDA',$MaDA)->get();
        
        foreach ($result as $key ) {
            if($key->TrangT==1){
                $key->TrangT='Hoàn thành';
            }else{
                $key->TrangT='Chưa hoàn thành';
            }
        }
       
        $result1=DB::table('thanhvien')->join('congviec','congviec.MaNV','=','thanhvien.MaNV')->join('duan','duan.MaDA','=','congviec.MaDA')->where('duan.MaDA',$MaDA)->get();
       
        return view('b1.index3',['KAA'=>$result,'KOO'=>$result1]);
    }
    public function del($MaDA){
        $result=DB::table('duan')->where('MaDA',$MaDA);
        $result2 = DB::table('congviec')->where('congviec.MaDA',$MaDA);
        $result->delete();
        $result2->delete();
        return redirect::to('xemthongtin');
    }
}
