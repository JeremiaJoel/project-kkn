<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Umkm;
use App\Models\Berita;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $rws = Rw::all();
        // $umkms = Umkm::with('rw')->get(); // relasi ke RW
        // $berita = Berita::with(['umkm', 'rw'])->latest()->get(); // relasi ke UMKM dan RW
        $umkms = Umkm::all(); // relasi ke RW
        $berita = Berita::all();
        return view('welcome', compact('rws', 'umkms', 'berita'));
    }

    public function katalogPage()
    {
        $umkms = Umkm::all();
        return view('katalog', compact('umkms'));
    }


    public function showDetail($beritaId)
    {
        $berita = Berita::where('id', $beritaId)->first();

        if (!$berita) {
            return response()->json(['error' => 'Berita tidak ditemukan'], 404);
        }

        return response()->json($berita);
    }
}
