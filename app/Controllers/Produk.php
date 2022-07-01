<?php

namespace App\Controllers;

class Produk extends BaseController
{

public function index()
    {
        return view('Produk/index');
    }

    public function banner()
    {

       return view('Produk/banner');
    }

    public function tshirt()
    {
        return view('Produk/tshirt');
    }

    public function jersey()
    {
        return view('Produk/jersey');
    }

    public function mug()
    {
        return view('Produk/mug');
    }

    public function poster()
    {
        return view('Produk/poster');
    }

    public function sertifikat()
    {
        return view('Produk/sertifikat');
    }

    public function tumbler()
    {
        return view('Produk/tumbler');
    }

    public function kunci()
    {
        return view('Produk/kunci');
    }

    public function akrilik()
    {
        return view('Produk/akrilik');
    }

    public function kartu()
    {
        return view('Produk/kartu');
    }

    public function sticker()
    {
        return view('Produk/sticker');
    }

   
}

