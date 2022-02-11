<?php

namespace App\Http\Controllers;
use App\Models\Sanpham;
use Illuminate\Http\Request;

class SanphamController extends Controller
{
    public function showall(){       
        $dsSP = Sanpham::all();
        return json_encode([
            $dsSP,
        ]);             
    }
}
