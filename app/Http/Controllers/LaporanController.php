<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Booking;
use App\Models\User;
use App\Models\Penerima;
use App\Models\Pengaduan;
use App\Models\Distribusi;
use App\Models\Instalasi;
use App\Models\Jalur;
use App\Models\Kapal;
use App\Models\Kerusakan;
use App\Models\Kota;
use App\Models\Pemeliharaan;
use App\Models\Pemesanan;
use App\Models\Pengadaan;
use App\Models\Penghapusan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Expr\Cast\Bool_;

class LaporanController extends Controller
{
    public function user()
    {
        $data = User::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_user', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function aset()
    {
        $data = Aset::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_aset', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function instalasi()
    {
        $data = Instalasi::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_instalasi', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function kerusakan()
    {
        $data = Kerusakan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_kerusakan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function penghapusan()
    {
        $data = Penghapusan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_penghapusan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function pemeliharaan()
    {
        $data = Pemeliharaan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_pemeliharaan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
    public function pengadaan()
    {
        $data = Pengadaan::get();
        $pdf = Pdf::loadView('superadmin.laporan.pdf_pengadaan', compact('data'))->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
