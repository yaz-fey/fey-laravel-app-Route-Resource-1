<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return "burasi index";
    }

    public function create()
    {
        return "kullanici oluşturma formu";
    }

    public function show()
    {
        return "detay goruntule";
    }
}
