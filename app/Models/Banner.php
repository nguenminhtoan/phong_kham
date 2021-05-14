<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Banner extends Model
{
    use HasFactory;
    protected $table = "banner";
    protected $fillable = ['LINK', "MOTA", "HINHANH", "SORT", "ID_NGUOIDUNG"];
    public $timestamps = false;
    
    public static function get_all(){
        $list = DB::select("SELECT link, mota, hinhanh, sort, id_banner FROM banner ORDER BY sort");
        return $list;
    }
}
