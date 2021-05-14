<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class AdminBannerController extends Controller
{
    //
    
    public function index(){
        $list = Banner::all();
        return view("admin.banner.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Banner();
        return view("admin.banner.create",["new" => $new]);
    }
    
    
    public function edit(Request $req){
        $new = Banner::firstWhere("ID_BANNER",$req->id);
        return view("admin.banner.edit",["new" => $new]);
    }
    
    public function save(Request $req){
        $check = Session::get('admin');
        $link = $this->convert_vi_to_en($req->LINK);
        $new = new Banner(["LINK" => $link,"MOTA" => $req->MOTA, "SORT" => $req->SORT, "ID_NGUOIDUNG" => $check->id_nguoidung]);
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/banner/'), $name);
            $new->HINHANH = "/img/banner/".$name;
        }
        else{
            $new->HINHANH = "";
        }
        
        if($new->save()){
            return redirect("/admin/banner");
        }
        else{
            return view("admin.banner.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $images = $req->file('file');
        $link = $this->convert_vi_to_en($req->LINK);
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/banner/'), $name);
            $new = Banner::where("ID_BANNER",$req->ID_BANNER)->update(["HINHANH" =>"/img/banner/".$name ,"LINK" => $link, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        else{
            $new = Banner::where("ID_BANNER",$req->ID_BANNER)->update(["LINK" => $link, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        
        if($new){
            return redirect("/admin/banner");
        }
        else{
            return view("admin.banner.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Banner::where("ID_BANNER", $req->id)->delete();
        return redirect("/admin/banner");
    }
    
}
