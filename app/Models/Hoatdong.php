<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Hoatdong extends Model
{
    use HasFactory;
    protected $table = "hoatdong";
    protected $fillable = ["ID_HOATDONG","TEN", "MOTA", "HINHANH", "SORT"];
    public $timestamps = false;
    public static function get_all(){
        $list = DB::select("SELECT id_hoatdong, ten, hinhanh, mota, sort, date_create
                        FROM hoatdong
                        ORDER BY date_create ASC");
        return $list;
    }
}
