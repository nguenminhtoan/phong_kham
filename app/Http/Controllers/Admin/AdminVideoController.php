<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class AdminVideoController extends Controller
{
    //
    public function index(){
        $list = Video::all();
        return view("admin.video.index",["list" => $list]);
    }
    
    public function create(){
        $new = new Video();
        return view("admin.video.create",["new" => $new]);
    }
    
    public function save(Request $req){
        $new = new Video(["VIDEO" => $req->VIDEO]);
        if($new->save()){
            return redirect("/admin/video");
        }
        else{
            return view("admin.video.create",["new" => $new]);
        }
    }

    
    public function delete(Request $req){
        Video::where("ID_VIDEO", $req->id)->delete();
        return redirect("/admin/video");
    }
}
