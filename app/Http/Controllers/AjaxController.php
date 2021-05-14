<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benh;

class AjaxController extends Controller
{
    public function index(Request $req){
        $list = Benh::get_detail($req->id);
        return json_encode($list);
    }
}
