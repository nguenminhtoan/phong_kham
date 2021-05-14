<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Benh extends Model
{
    use HasFactory;
    protected $table = "benh";
    protected $fillable = ["TEN", "TRIEUCHUNG", "SORT"];
    public $timestamps = false;
    
    
    public static function get_all(){
        $list = DB::select("SELECT id_benh, ten, trieuchung, sort, date_create FROM benh ORDER BY sort ASC");
        return $list;
    }
    
    public static function get_detail($id){
        $list = DB::select("SELECT id_benh, ten, trieuchung, sort, date_create FROM benh WHERE id_benh = :id", ["id" => $id]);
        return $list[0];
    }
}
