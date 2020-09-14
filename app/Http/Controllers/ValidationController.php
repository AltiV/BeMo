<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function validateData(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'content'=>'required'
        ]);

        return $req->input();
    }
}
