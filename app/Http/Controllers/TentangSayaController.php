<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangSayaController extends Controller
{
    public function index(){
        $data = [
            'nama'=>'Raditya hafid',
            'pekerjaan' => 'backend dev'
        ];
        return view('tentang' ,$data);
    }
}
