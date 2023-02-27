<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWebController extends Controller
{
    // public function home(){
    //     return 'Selamat Datang di Educa Studio';
    // }

    public function index(){
        return view('home');
    }

}
