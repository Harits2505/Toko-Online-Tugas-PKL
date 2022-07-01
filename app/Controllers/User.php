<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('User/index',);
    }

    public function pesanan()
    {
        return view('User/pesanan');
    }

    public function editprofile()
    {
        return view('User/editprofile');
    }

    public function costumerservis()
    {
        return view('User/costumerservis');
    }

    public function sosialmedia()
    {
        return view('User/sosialmedia');
    } 
}
