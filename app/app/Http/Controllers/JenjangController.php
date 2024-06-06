<?php

namespace App\Http\Controllers;

use App\Models\Class;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Jenjang;
use App\Models\pelajaran;

class JenjangController extends Controller
{
   
        public function index()
        {
            return view('jenjang.index');
        }
    
        public function showPelajaran($jenjang)
        {
            return redirect()->route('pelajaran.show', $jenjang);
        }
        
    

    public function show($jenjang)
    {
        $pelajaran = $this->getPelajaranByJenjang($jenjang);
        return view('pelajaran', compact('jenjang', 'pelajaran'));
    }

    private function getPelajaranByJenjang($jenjang)
    {
        // Daftar pelajaran berdasarkan jenjang
        $pelajaran = [
            'kelas10' => ['Matematika', 'Biologi', 'Kimia'],
            'kelas11' => ['Fisika', 'Geografi', 'Sejarah'],
            'kelas12' => ['Bahasa Indonesia', 'Bahasa Inggris', 'Ekonomi'],
        ];

        return $pelajaran[$jenjang] ?? [];
    }
}
