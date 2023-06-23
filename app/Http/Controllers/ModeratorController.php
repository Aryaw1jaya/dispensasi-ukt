<?php

namespace App\Http\Controllers;

use App\Models\Moderator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeratorController extends Controller
{
    public function index()
    {
        return view('pages.moderator.index');
    }
    public function pengajuan()
    {
        $pengajuan = DB::table('pengajuan')->get();
        return view('pages.moderator.pengajuan', ['pengajuan' => $pengajuan]);
    }
    public function updateStatus(Request $request, $id)
    {
        DB::table('pengajuan')->where('id', $id)->update([
            'status' => $request->status,
            'note' => $request->note,
            'updated_at' => now()
        ]);
        return redirect('moderator/pengajuan');
    }
}
