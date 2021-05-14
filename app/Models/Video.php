<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Video extends Model
{
    use HasFactory;
    protected $table = "video";
    protected $fillable = ["VIDEO"];
    public $timestamps = false;
    
    public static function get_all($offer = 0, $limit = 20){
        $list = DB::select("SELECT id_video, video FROM video ORDER BY date_create DESC LIMIT :offer, :limit", ["offer" => $offer, "limit" => $limit]);
        return $list;
    }
}
