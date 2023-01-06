<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'name' => 'bail|required',
            'email' => 'bail|required|email',
            'message' => 'bail|required',
            'phone' => 'bail|required|numeric',
        ]);

        $info = new Info();
        $info->name = $request->name;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->message = $request->message;
        $info->save();
        return redirect()->back();
    }
}
