<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
class AdminCustomerController extends Controller
{
    
    public function index(){
        $list = Customer::all();
        return view("admin.customer.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Customer();
        return view("admin.customer.create",["new" => $new]);
    }
    
    
    public function edit(Request $req){
        $new = Customer::firstWhere("ID_NGUOIDUNG",$req->id);
        return view("admin.customer.edit",["new" => $new]);
    }
    
    public function save(Request $req){
        $new = new Customer(["EMAIL" => $req->EMAIL, "TEN" => $req->TEN, "SDT" => $req->SDT, "DIACHI" => $req-> DIACHI, "MATKHAU" => $req->MATKHAU]);
        
        if($new->save()){
            return redirect("/admin/customer");
        }
        else{
            return view("admin.customer.create",["new" => $new]);
        }
    }
    
    public function update(Request $req){
        
        $new = Customer::where("ID_NGUOIDUNG",$req->ID_NGUOIDUNG)->update(["EMAIL" => $req->EMAIL, "TEN" => $req->TEN, "SDT" => $req->SDT, "DIACHI" => $req-> DIACHI, "MATKHAU" => $req->MATKHAU]);
        
        if($new){
            return redirect("/admin/customer");
        }
        else{
            return view("admin.customer.create",["new" => $new]);
        }
    }
    
    public function delete(Request $req){
        Customer::where("ID_NGUOIDUNG", $req->id)->delete();
        return redirect("/admin/customer");
    }
}
