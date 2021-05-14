<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
class AdminCategoriesController extends Controller
{
    
    public function index(){
        $list = Categories::all();
        return view("admin.categories.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Categories();
        $list = Categories::all();
        return view("admin.categories.create",["new" => $new, "list" => $list]);
    }
    
    
    public function edit(Request $req){
        $new = Categories::firstWhere("ID_DANHMUC",$req->id);
        $list = Categories::all();
        return view("admin.categories.edit",["new" => $new, "list" => $list]);
    }
    
    public function save(Request $req){
        $link = $this->convert_vi_to_en($req->LINK);
        $new = new Categories(["FK_DANHMUC" => $req->FK_DANHMUC,"TEN" => $req->TEN, "SORT" => $req->SORT, "LINK" => $link]);
        
        if($new->save()){
            return redirect("/admin/categories");
        }
        else{
            return view("admin.categories.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        $link = $this->convert_vi_to_en($req->LINK);
        $new = Categories::where("ID_DANHMUC",$req->ID_DANHMUC)->update(["FK_DANHMUC" => $req->FK_DANHMUC, "LINK" => $link, "TEN" => $req->TEN, "SORT" => $req->SORT]);
        
        if($new){
            return redirect("/admin/categories");
        }
        else{
            return view("admin.categories.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Categories::where("ID_DANHMUC", $req->id)->delete();
        return redirect("/admin/categories");
    }
}
