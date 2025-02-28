<?php

namespace App\Http\Controllers;

use App\Models\QR;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function show(Request $request)
    {
        $code = $request->query('code');
        $device = QR::where('code', $code)->firstOrFail();
        return view('device', compact('device'));
    }
}
