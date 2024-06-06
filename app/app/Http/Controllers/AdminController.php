<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use App\Models\Pelajaran;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
       
            return view('admin.dashboard');
        
    }

    public function createPelajaran()
    {
            $jenjang = Jenjang::all();
            return view('admin.create_pelajaran', compact('jenjang'));
        
    }

    public function storePelajaran(Request $request)
    {
        $request->validate([
            'jenjang_id' => 'required|integer',
            'nama_pelajaran' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Unggah dan simpan gambar
        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images','public',);
        }

        // Simpan data pelajaran ke database
        $pelajaran = new Pelajaran();
        $pelajaran->jenjang_id = $request->jenjang_id;
        $pelajaran->nama_pelajaran = $request->nama_pelajaran;
        $pelajaran->gambar = $path; 
        $pelajaran->save();

        return redirect()->route('admin.dashboard')->with('success', 'Pelajaran created successfully');
    }

    public function createMateri()
    {
            $pelajaran = Pelajaran::all();
            return view('admin.create_materi', compact('pelajaran'));
       
    }

    public function storeMateri(Request $request)
    {
        
            $materi = new Materi();
            $materi->pelajaran_id = $request->pelajaran_id;
            $materi->judul_materi = $request->judul_materi;
            $materi->isi_materi = $request->isi_materi;
            $materi->save();

            return redirect()->route('admin.dashboard')->with('success', 'Materi created successfully');
       
    }
}
