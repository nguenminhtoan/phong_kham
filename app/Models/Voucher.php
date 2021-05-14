<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Voucher extends Model
{
    use HasFactory;
    protected $table = "khuyenmai";
    public $timestamps = false;
    public static function get_all(){
        $list = DB::select("SELECT id_khuyenmai, km.id_nguoidung, giamgia, apdung, km.ten, nd.ten as hoten, hinhanh, link, luocxem, noidung, km.date_create,
                    (SELECT group_concat(DISTINCT CONCAT('khuyen-mai/',t.link,'<->', tc.ten)) FROM tag tg JOIN tag t ON tg.token = t.token 
                        JOIN khuyenmai tc ON tc.link = t.link where tg.link = km.link AND t.link != km.link order by count(t.link) DESC) as tag
                    FROM khuyenmai km JOIN nguoidung nd ON nd.id_nguoidung = km.id_nguoidung 
                    ORDER BY km.date_create ASC");
        return $list;
    }
    
    
    public static function get_voucher(){
        $list = DB::select("SELECT id_khuyenmai, 'khuyen-mai' as danhmuc, km.id_nguoidung, giamgia, apdung, km.ten, nd.ten as hoten, hinhanh, link, luocxem, noidung, km.date_create,
                    (SELECT group_concat(DISTINCT CONCAT('khuyen-mai/',t.link,'<->', tc.ten)) FROM tag tg JOIN tag t ON tg.token = t.token 
                        JOIN khuyenmai tc ON tc.link = t.link where tg.link = km.link AND t.link != km.link order by count(t.link) DESC) as tag
                    FROM khuyenmai km JOIN nguoidung nd ON nd.id_nguoidung = km.id_nguoidung 
                    ORDER BY km.date_create ASC");
        return $list;
    }
}
