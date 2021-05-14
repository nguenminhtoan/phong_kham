<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
class AdminVoucherController extends Controller
{
    
    public function index(){
        $list = Voucher::all();
        return view("admin.voucher.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Voucher();
        return view("admin.voucher.create",["new" => $new]);
    }
    
    
    public function edit(Request $req){
        $new = Voucher::firstWhere("ID_KHUYENMAI",$req->id);
        return view("admin.voucher.edit",["new" => $new]);
    }
    
    public function save(Request $req){
        $check = Session::get('admin');
        $new = new Voucher(["LINK" => $req->LINK,"MOTA" => $req->MOTA, "SORT" => $req->SORT, "ID_NGUOIDUNG" => $check->id_nguoidung]);
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/voucher/'), $name);
            $new->HINHANH = "/img/voucher/".$name;
        }
        else{
            $new->HINHANH = "";
        }
        
        if($new->save()){
            return redirect("/admin/voucher");
        }
        else{
            return view("admin.voucher.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $images = $req->file('file');
        if ($images != ''){
            $name = time().'.jpg';
            $images->move(public_path('/img/voucher/'), $name);
            $new = Voucher::where("ID_KHUYENMAI",$req->ID_KHUYENMAI)->update(["HINHANH" =>"/img/voucher/".$name ,"LINK" => $req->LINK, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        else{
            $new = Voucher::where("ID_KHUYENMAI",$req->ID_KHUYENMAI)->update(["LINK" => $req->LINK, "MOTA" => $req->MOTA, "SORT" => $req->SORT]);
        }
        
        if($new){
            return redirect("/admin/voucher");
        }
        else{
            return view("admin.voucher.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Voucher::where("ID_KHUYENMAI", $req->id)->delete();
        return redirect("/admin/voucher");
    }
    
}
