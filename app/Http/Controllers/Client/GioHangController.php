<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GioHangController extends Controller
{
    //
    public function getGioHang() {

    }

    public function addGioHang(Request $request) {
        $tempID = $request->cookie('laravel_session');
        var_dump($tempID);die();
    }

    public function editGioHang(Request $request) {

    }

}
