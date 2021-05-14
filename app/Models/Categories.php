<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Categories extends Model
{
    use HasFactory;
    protected $table = "danhmuc";
    protected $fillable = ["FK_DANHMUC", "TEN", "LINK", "SORT", "ID_DANHMUC"];
    public $timestamps = false;
    
    public static function get_all(){
        $list = DB::select("SELECT c.id_danhmuc, c.fk_danhmuc, c.link, c.ten, cs.link as fk_link, c.sort
                FROM danhmuc c
                LEFT JOIN danhmuc cs ON cs.id_danhmuc = c.fk_danhmuc
                ORDER BY c.sort ASC");
        return $list;
    }
    
    public static function get_link($link){
        $list = DB::select("SELECT id_danhmuc, fk_danhmuc, link, ten, sort FROM danhmuc WHERE link = :link", ["link" =>$link]);
        return $list[0]->ten;
    }
}
