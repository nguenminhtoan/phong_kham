<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;
class Customer extends Model
{
    use HasFactory;
    protected $table = "nguoidung";
    protected $fillable = ["EMAIL", "TEN", "SDT", "DIACHI", "MATKHAU"];
    public $timestamps = false;
    
    
    public static function autemail($email){
        $list = DB::select("SELECT id_nguoidung, baomat, admin_key, ten 
            FROM nguoidung
            WHERE email = :email",[ "email" => $email]);
        return $list;
    }
    
    
    public static function authentication($email, $matkhau){
        $list = DB::select("SELECT id_nguoidung, baomat, admin_key, ten 
            FROM nguoidung
            WHERE email = :email AND matkhau = :matkhau",[ "email" => $email, "matkhau" => $matkhau]);
        return $list;
    }
}
