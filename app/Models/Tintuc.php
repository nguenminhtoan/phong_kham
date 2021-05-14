<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Tintuc extends Model
{
    use HasFactory;
    protected $table = "tintuc";
    protected $fillable = ['LINK', "NOIDUNG", "LUOCXEM", "ID_DANHMUC", "ID_NGUOIDUNG", "TEN"];
    public $timestamps = false;
    
    
    public static function get_all($offer = "", $limit = 20){
        $sql = "SELECT tt.link, dm.link as danhmuc, tt.ten, tt.noidung, tt.hinhanh, tt.id_danhmuc,
          tt.id_tintuc, nd.id_nguoidung, nd.ten as hoten, tt.date_create , tt.luocxem as luocxem
          FROM tintuc tt
          JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
          JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
          ORDER BY tt.date_create DESC ";
        $param = [];
        if ($offer != ""){
            $sql .= " LIMIT :offer, :limit";
            $param = ["offer" => $offer, "limit" =>$limit];
        }
        
        $list = DB::select($sql, $param);
        return $list;
    }
    
    public static function get_count_link($link){
        $count = DB::select("SELECT COUNT(*) as count FROM tintuc tt
      JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
      JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
      LEFT JOIN danhmuc fm ON dm.fk_danhmuc = fm.id_danhmuc
      WHERE dm.link = :link OR fm.link = :link2", ["link" => $link, "link2" => $link]);
        return $count[0]->count;
    }

    public static function get_count_all(){
        $count = DB::select("SELECT COUNT(*) as count FROM tintuc");
        return $count[0]->count;
    }

    public static function get_link($link, $offer = 0, $limit = 20){
        $sql = "SELECT tt.link, dm.link as danhmuc, tt.ten, tt.noidung, tt.hinhanh, tt.id_danhmuc,
          tt.id_tintuc, nd.id_nguoidung, nd.ten as hoten, tt.date_create, tt.luocxem as luocxem,
          (SELECT group_concat(DISTINCT CONCAT(dm.link,'/',t.link,'<->', tc.ten)) FROM tag tg JOIN tag t ON tg.token = t.token 
          JOIN tintuc tc ON tc.link = t.link JOIN danhmuc dm ON dm.id_danhmuc = tc.id_danhmuc where tg.link = tt.link AND t.link != tt.link order by count(t.link) DESC) as tag
          FROM tintuc tt
          JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
          JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
          LEFT JOIN danhmuc fm ON dm.fk_danhmuc = fm.id_danhmuc
          WHERE dm.link = :link OR fm.link = :link2 ORDER BY date_create DESC 
          LIMIT :offer, :limit";
        $param = ["link" => $link, "link2" => $link, "offer" => $offer, "limit" =>$limit];
        $list = DB::select($sql, $param);
        return $list;
    }
    
    
    public static function get_new(){
        $sql = "SELECT tt.link, dm.link as danhmuc, tt.ten, tt.noidung, tt.hinhanh, tt.id_danhmuc,
                    tt.id_tintuc, nd.id_nguoidung, nd.ten as hoten, tt.date_create, tt.luocxem as luocxem
                    FROM tintuc tt
                      JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
                      JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
                      ORDER BY tt.date_create DESC LIMIT 5 ";
        $list = DB::select($sql);
        return $list;
    }
    public static function get_hot(){
        $sql = "SELECT tt.link, dm.link as danhmuc, tt.ten, tt.noidung, tt.hinhanh, tt.id_danhmuc,
                tt.id_tintuc, nd.id_nguoidung, nd.ten as hoten, tt.date_create, tt.luocxem as luocxem
                FROM tintuc tt
                  JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
                  JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
                  ORDER BY tt.luocxem DESC LIMIT 5 ";
        $list = DB::select($sql);
        return $list;
    }
    
    public static function get_link_detail($link, $id){
        $sql = "SELECT tt.link, dm.link as danhmuc,  tt.ten, noidung, hinhanh, tt.id_tintuc, nd.id_nguoidung, 
           nd.ten as hoten, tt.id_danhmuc, tt.date_create, tt.luocxem as luocxem
          FROM tintuc tt
          JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
          JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
          WHERE dm.link = :link AND tt.link = :link2";
        $list = DB::select($sql,["link" => $link, "link2" => $id])[0];
        return $list;
    }
    
    
    public static function get_history($link){
        
        $data = join("','", $link);
        $sql = "SELECT tt.link, dm.link as danhmuc, tt.ten, tt.noidung, tt.hinhanh, tt.id_danhmuc,
      tt.id_tintuc, nd.id_nguoidung, nd.ten as hoten, tt.date_create, tt.luocxem as luocxem
      FROM tintuc tt
      JOIN nguoidung nd ON nd.id_nguoidung = tt.id_nguoidung 
      JOIN danhmuc dm ON dm.id_danhmuc = tt.id_danhmuc
        WHERE tt.link IN ('".$data."') GROUP BY tt.id_tintuc";
        $list = DB::select($sql);
        return $list;
    }
    
    public static function update_view($id){
        $sql = "UPDATE tintuc SET luocxem = luocxem + 1 WHERE link = :link";
        $list = DB::update($sql,["link" => $id]);
        return $list;
    }
}
