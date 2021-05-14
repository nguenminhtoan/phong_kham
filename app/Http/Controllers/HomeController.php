<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use DB;
use App\Models\Tintuc;
use App\Models\Voucher;
use App\Models\Video;
use App\Models\Hoatdong;
use App\Models\Benh;
use App\Models\Categories;
use App\Models\Setting;
use Session;
class HomeController extends Controller
{
    //
    
    public function index(){
        $banner = Banner::get_all();
        $new = Tintuc::get_new();
        $list = Tintuc::get_link('dieu-tri-benh',0,3);
        $vatly = Tintuc::get_link('vat-ly-tri-lieu',0,3);
        $thietbi = Tintuc::get_link('ban-thiet-bi', 0, 3);
        $voucher = Voucher::get_all();
        $benh = Benh::get_all();
        $video = Video::get_all(0,5);
        $hoatdong = Hoatdong::get_all();
        
        
        
        $tinhot = Tintuc::get_hot();
        $menu = Categories::get_all();
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        
        return view("home.index",["banner" => $banner, "new" => $new, "list" => $list, "vatly" => $vatly,
            "thietbi"=> $thietbi, "voucher" => $voucher, "benh" => $benh, "video" => $video,
            "hoatdong" => $hoatdong, "menu" => $menu, 'tinhot' => $tinhot, "option" => $option]);
    }
    
    
    public function show(Request $req){
        $current = isset($req->page) ? $re1->page : 0;
        $link = $req->link;
        if ($link == 'phuong-phap-dieu-tri'){
          $list = Tintuc::get_all($current);
          $count = Tintuc::get_count_all();
          $title = "Phương pháp điều trị";
        }
        else if ($link == 'khuyen-mai'){
            $list = Voucher::get_voucher();
            $count = 0;
            $title = "khuyến mãi";
        }else{
          $list = Tintuc::get_link($link, $current);
          $count = Tintuc::get_count_link($link);
          $title = Categories::get_link($link);
        }

        $new = Tintuc::get_new();
        $his = [];
        
        
        $tinhot = Tintuc::get_hot();
        $menu = Categories::get_all();
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        return view("home.show", ["count" => $count, "list" => array_chunk($list,2), "title" => $title, 
            "new" => $new, "his" => $his, "current"=>$current,
            "menu" => $menu, 'tinhot' => $tinhot, "option" => $option]);
    }
    
    public function detail(Request $req){
        $link = $req->link;
        $id = $req->id;
        $detail = Tintuc::get_link_detail($link, $id);
        $title = Categories::get_link($link);
        
        Tintuc::update_view($id);
        
        $new = Tintuc::get_new();
        $his = [];
        
        $cookie = Session::get("link");
        if ($cookie){
            $his = Tintuc::get_history(Session::get("link"));
        }
        
        $this->add_cookie($id);
        $tinhot = Tintuc::get_hot();
        $menu = Categories::get_all();
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        return view("home.detail", ["detail" => $detail, "title" => $title, 
            "new" => $new, "his" => $his,
            "menu" => $menu, 'tinhot' => $tinhot, "option" => $option]);
    }
    
    
    public function news(Request $req){
        $current = isset($req->page) ? $re1->page : 0;
        $link = $req->link;
        if ($link == 'phuong-phap-dieu-tri'){
          $list = Tintuc::get_all($current);
          $count = Tintuc::get_count_all();
          $title = "Phương pháp điều trị";
        }
        else{
          $list = Tintuc::get_link($link, $current);
          $count = Tintuc::get_count_link($link);
          $title = Categories::get_link($link);
        }

        $new = Tintuc::get_new();
        $his = [];
        
        
        $tinhot = Tintuc::get_hot();
        $menu = Categories::get_all();
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        return view("home.show", ["count" => $count, "list" => array_chunk($list,2), "title" => $title, 
            "new" => $new, "his" => $his, "current"=>$current,
            "menu" => $menu, 'tinhot' => $tinhot, "option" => $option]);
    }
    
    
    public function news_detail(Request $req){
        $link = $req->link;
        $id = $req->id;
        $detail = Tintuc::get_link_detail($link, $id);
        $title = Categories::get_link($link);
        
        $new = Tintuc::get_new();
        $his = [];
        
        
        $tinhot = Tintuc::get_hot();
        $menu = Categories::get_all();
        $data = Setting::get_all();
        $option = array();
        foreach ($data as $v){
          $option[$v->option_id] = $v->option1;
        }
        return view("home.detail", ["detail" => $detail, "title" => $title, 
            "new" => $new, "his" => $his,
            "menu" => $menu, 'tinhot' => $tinhot, "option" => $option]);
    }
    
    private static function add_cookie($link){
        if (is_null(Session::get("link"))){
            Session::put("link", [$link]);
        }else{
            $list = Session::get("link");
            $a = array_search($link, $list);
            if ($a == 0){
                if (count($list) > 5){
                    unset($list[0]);
                }
                array_push($list, $link);
                
            }
            Session::put("link", $list);
        }
    }
    
    
    
}
