<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Setting extends Model
{
    use HasFactory;
    protected $table = "setting";
    public $timestamps = false;
    public static function get_all(){
        $list = DB::select("SELECT id_code, option1, option_id, date_create FROM setting");
        return $list;
    }
}
