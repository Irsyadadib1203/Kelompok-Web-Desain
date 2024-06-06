<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelajaran;
use App\Models\jenjang;
use App\Models\materi;


class pelajaranController extends Controller
{
    
    public function showMateri($id)
    {
        $materi = Materi::findOrFail($id);

        return view('user.materi', compact('materi'));
    }
   
   
    public function index($jenjang)
    {
        $jenjang = Jenjang::where('kelas', $jenjang)->firstOrFail();
        $pelajaran = Pelajaran::where('jenjang_id', $jenjang->id)->get();
        
        return view('pelajaran', compact('pelajaran'));
    }

    public function showBab($id)
    {
        $pelajaran = Pelajaran::with('materi')->findOrFail($id);
        $materi = $pelajaran->materi;

        return view('bab', compact('pelajaran', 'materi'));
    }
    public function store(Request $request)
{
    $pelajaran = new Pelajaran();
    $pelajaran->nama_pelajaran = $request->input('nama_pelajaran');
    $pelajaran->gambar = file_get_contents($request->file('gambar')->getPathname());
    $pelajaran->jenjang_id = $request->input('jenjang_id');
    $pelajaran->save();
    return redirect()->back()->with('success', 'Pelajaran created successfully');
}
    public function show($id)
    {
    $pelajaran = Pelajaran::findOrFail($id);
        $path = storage_path('app/public/' . str_replace('storage/', '', $pelajaran->gambar));

        return response()->file($path, [
            'Content-Type' => mime_content_type($path),
            'Content-Disposition' => 'inline; filename="' . $pelajaran->nama_pelajaran . '.png"',
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $materi = Materi::where('judul_materi', 'LIKE', "%{$query}%")->get();
        return view('bab', compact('materi'));
    }

    
}
