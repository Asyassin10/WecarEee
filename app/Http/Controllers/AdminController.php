<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        $infos = Info::orderBy('id', 'DESC')->get();
        return view('admin')->with('infos',$infos);
    }
}
