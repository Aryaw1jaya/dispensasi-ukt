<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RektoratController extends Controller
{
    public function index()
    {
        return view('pages.rectorate.index');
    }
    public function pengajuan()
    {
        $pengajuan = DB::table('pengajuan')->get();
        return view('pages.rectorate.persetujuan', ['pengajuan' => $pengajuan]);
    }
    public function updateStatus(Request $request, $id)
    {
        DB::table('pengajuan')->where('id', $id)->update([
            'status' => $request->status,
            'note' => $request->note,
            'updated_at' => now()
        ]);
        return redirect('rectorate/pengajuan');
    }
}
