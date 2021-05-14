<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tintuc;
use App\Models\Categories;
use DB;
use Session;
class AdminNewsController extends Controller
{
    //
    
    public function index(){
        $list = DB::table("tintuc") 
                ->select("ID_TINTUC", "HINHANH", "tintuc.LINK", "nguoidung.TEN AS HOTEN", "tintuc.TEN AS TEN", "danhmuc.TEN as DANHMUC")
                ->join("nguoidung", "nguoidung.ID_NGUOIDUNG", "=", "tintuc.ID_NGUOIDUNG")
                ->join("danhmuc", "danhmuc.ID_DANHMUC", "=","tintuc.ID_DANHMUC")
                ->get();
        return view("admin.news.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Tintuc();
        $danhmuc = Categories::all();
        return view("admin.news.create",["new" => $new, "danhmuc" => $danhmuc]);
    }
    
    
    public function edit(Request $req){
        $new = Tintuc::firstWhere("ID_TINTUC",$req->id);
        $danhmuc = Categories::all();
        return view("admin.news.edit",["new" => $new, "danhmuc" => $danhmuc]);
    }
    
    public function save(Request $req){
        $check = Session::get('admin');
        $link = $this->convert_vi_to_en($req->LINK);
        $new = new Tintuc(["LINK" => $link,"NOIDUNG" => $req->NOIDUNG, 
                        "TEN" => $req->TEN, "LUOCXEM" => 0,
                        "ID_DANHMUC" => $req->ID_DANHMUC, "ID_NGUOIDUNG" => $check->id_nguoidung]);
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/tintuc/'), $name);
            $new->HINHANH = "/img/tintuc/".$name;
        }
        else{
            $new->HINHANH = "";
        }
        
        if($new->save()){
            return redirect("/admin/news");
        }
        else{
            return view("admin.news.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $images = $req->file('file');
        $link = $this->convert_vi_to_en($req->LINK);
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/tintuc/'), $name);
            $new = Tintuc::where("ID_TINTUC",$req->ID_TINTUC)->update(["HINHANH" =>"/img/tintuc/".$name ,"LINK" => $link, "NOIDUNG" => $req->NOIDUNG, "TEN" => $req->TEN, "ID_DANHMUC" => $req->ID_DANHMUC]);
        }
        else{
            $new = Tintuc::where("ID_TINTUC",$req->ID_TINTUC)->update(["LINK" => $link, "NOIDUNG" => $req->NOIDUNG, "TEN" => $req->TEN, "ID_DANHMUC" => $req->ID_DANHMUC]);
        }
        
        if($new){
            return redirect("/admin/news");
        }
        else{
            $danhmuc = Categories::all();
            $new = Tintuc::firstWhere("ID_TINTUC",$req->ID_TINTUC);
            return view("admin.news.edit",["new" => $new, "danhmuc" => $danhmuc]);
        }
    }
    
    public function delete(Request $req){
        Tintuc::where("ID_TINTUC", $req->id)->delete();
        return redirect("/admin/news");
    }
}
