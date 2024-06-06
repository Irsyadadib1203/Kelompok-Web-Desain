<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;



class UserController extends Controller
{
    public function showJenjang()
    {
        
            $jenjang = Jenjang::all();
            return view('user.jenjang', compact('jenjang'));
    
    }
}
