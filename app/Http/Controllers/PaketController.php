<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{

    public function paket()
    {
        return view('paket.paket');
    }

    public function detailPaket()
    {
        return view('paket.detail-paket');
    }

    public function customPaket()
    {
        return view('paket.custom');
    }

    public function pilihPaket()
    {
        return view('pesan-paket.pilih-paket');
    }

    public function dataDiri()
    {
        return view('pesan-paket.data-diri');
    }

    public function konfirmasi()
    {
        return view('pesan-paket.konfirmasi');
    }

    public function buktiPembayaran()
    {
        return view('pesan-paket.bukti-pembayaran');
    }

    public function publicDashboard()
    {
        return view('profile.user-dashboard');
    }
}
