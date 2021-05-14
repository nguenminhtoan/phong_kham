<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Customer;
use Session;

class AdminLoginController extends Controller
{
    //
    
    public function index(){
        $account = new Account();
        return view("admin.account.index", ["account" => $account]);
    }
    
    public function auth(Request $req){
        $account = new Account(["email" => $req->email]);
        $res = Customer::autemail($req->email);
        if(isset($res)){
            if (Customer::authentication($req->email, $req->matkhau)){
                Session::put('admin', $res[0]);
                Session::put('date_time', date("Y/m/d") );
                return redirect("/admin/news");
            }
            else{
                return view("admin.account.index", ["account" => $account]);
            }
        }else{
            return view("admin.account.index", ["account" => $account]);
        }
    }
    
    public function logout(){
        Session::flush();
        return redirect("admin/login");
    }
}
