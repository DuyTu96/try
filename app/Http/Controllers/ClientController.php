<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ClientController extends Controller
{
    public function index()
    {
        $check = Auth::check('email');
        return view('client.index',compact('check'));
        // echo $check;
    }
}
