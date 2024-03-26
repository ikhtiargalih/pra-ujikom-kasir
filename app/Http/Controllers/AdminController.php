<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardAdmin()
    {
        return view('pages.admin.index');
    }

    public function produk()
    {
        return view('pages.admin.produk.index');
    }

    public function pembelian()
    {
        return view('pages.admin.pembelian.index');
    }

    public function login()
    {
        return view('pages.admin.auth.login');
    }
}
