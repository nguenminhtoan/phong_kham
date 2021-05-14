<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hoatdong;

class AdminHoatdongController extends Controller
{
    
    public function index(){
        $list = Hoatdong::all();
        return view("admin.hoatdong.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Hoatdong();
        return view("admin.hoatdong.create",["new" => $new]);
    }
    
    
    public function edit(Request $req){
        $new = Hoatdong::firstWhere("ID_HOATDONG",$req->id);
        return view("admin.hoatdong.edit",["new" => $new]);
    }
    
    public function save(Request $req){
        $new = new Hoatdong(["TEN" => $req->TEN,"MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/hoatdong/'), $name);
            $new->HINHANH = "/img/hoatdong/".$name;
        }
        else{
            $new->HINHANH = "";
        }
        
        if($new->save()){
            return redirect("/admin/hoatdong");
        }
        else{
            return view("admin.hoatdong.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/hoatdong/'), $name);
            $new = Hoatdong::where("ID_HOATDONG",$req->ID_HOATDONG)->update(["HINHANH" =>"/img/hoatdong/".$name ,"TEN" => $req->TEN, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        else{
            $new = Hoatdong::where("ID_HOATDONG",$req->ID_HOATDONG)->update(["TEN" => $req->TEN, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        
        if($new){
            return redirect("/admin/hoatdong");
        }
        else{
            return view("admin.hoatdong.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Hoatdong::where("ID_HOATDONG", $req->id)->delete();
        return redirect("/admin/hoatdong");
    }
}
