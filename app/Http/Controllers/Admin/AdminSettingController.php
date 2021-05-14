<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;
class AdminSettingController extends Controller
{
    //
    
    public function index(){
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        
        return view("admin.setting.index", ["option" => $option]);
    }

    
    public function update(Request $req){
        $option = $req->option;
        foreach($option as $key=>$item){
           DB::update("UPDATE setting SET option1 = :option1 WHERE option_id = :option_id", ["option1" => $item, "option_id" => $key]);
           
        }
        return redirect("/admin/setting");
    }
    
 
}
