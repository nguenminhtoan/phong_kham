<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benh;

class AdminBenhController extends Controller
{
    //
    public function index(){
        $list = Benh::all();
        return view("admin.benh.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Benh();
        return view("admin.benh.create",["new" => $new]);
    }
    
    
    public function edit(Request $req){
        $new = Benh::firstWhere("ID_BENH",$req->id);
        return view("admin.benh.edit",["new" => $new]);
    }
    
    public function save(Request $req){
        $new = new Benh(["TEN" => $req->TEN,"TRIEUCHUNG" => $req->TRIEUCHUNG, "SORT" => $req->SORT]);
        if($new->save()){
            return redirect("/admin/benh");
        }
        else{
            return view("admin.benh.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $new = Benh::where("ID_BENH",$req->ID_BENH)->update(["TEN" => $req->TEN, "TRIEUCHUNG" => $req->TRIEUCHUNG, "SORT" => $req->SORT]);
        if($new){
            return redirect("/admin/benh");
        }
        else{
            return view("admin.benh.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Benh::where("ID_BENH", $req->id)->delete();
        return redirect("/admin/benh");
    }
}
