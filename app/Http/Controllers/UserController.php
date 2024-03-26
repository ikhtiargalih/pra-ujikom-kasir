<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboardUser()
    {
        return view('pages.user.kasir');
    }

    public function kasirProduk()
    {
        return view('pages.user.produk.index');
    }

    public function kasirPembelian()
    {
        return view('pages.user.pembelian.index');
    }

}
