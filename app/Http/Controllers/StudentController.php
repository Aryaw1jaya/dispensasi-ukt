<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pengajuan()
    {
        $data = DB::table('pengajuan')->where('student_id', session('student_id'))->get();
        $pengajuan = DB::table('pengajuan')->where('student_id', session('student_id'))->where('status', 'pending')->exists();

        return view('pages.student.pengajuan', ['data' => $data, 'pengajuan' => $pengajuan]);
    }

    public function createPengajuan()
    {
        return view('pages.student.form-pengajuan');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storePengajuan(Request $request)
    {
        $request->validate([
            'surat_permohonan' => 'required|mimes:pdf|max:2048',
            'surat_kronologi' => 'required|mimes:pdf|max:2048',
            'sktm' => 'required|mimes:pdf|max:2048',
            'kartu_keluarga' => 'required|mimes:pdf|max:2048',
            'transkip' => 'required|mimes:pdf|max:2048',
            'ss_myupj' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Mendapatkan data input dari form
        $student_id = $request->input('student_id');
        $nama = $request->input('nama');
        $prodi = $request->input('prodi');
        $email = $request->input('email');
        $suratPermohonan = $request->file('surat_permohonan');
        $suratKronologi = $request->file('surat_kronologi');
        $sktm = $request->file('sktm');
        $kartuKeluarga = $request->file('kartu_keluarga');
        $transkipNilai = $request->file('transkip');
        $ss_myupj = $request->file('ss_myupj');

        // Memeriksa apakah folder student_id sudah ada atau belum
        if (!Storage::exists('public/' . $student_id)) {
            // Jika folder belum ada, maka buat folder dengan nama student_id
            Storage::makeDirectory('public/' . $student_id);
        }

        // Memindahkan file-file yang diupload ke dalam folder student_id
        $suratPermohonan->storeAs('public/' . $student_id, time() . "_"  .  $suratPermohonan->getClientOriginalName());
        $suratKronologi->storeAs('public/' . $student_id, time() . "_" .  $suratKronologi->getClientOriginalName());
        $sktm->storeAs('public/' . $student_id, time() . "_" .  $sktm->getClientOriginalName());
        $kartuKeluarga->storeAs('public/' . $student_id, time() . "_" .  $kartuKeluarga->getClientOriginalName());
        $transkipNilai->storeAs('public/' . $student_id, time() . "_" .  $transkipNilai->getClientOriginalName());
        $ss_myupj->storeAs('public/' . $student_id, time() . "_" .  $ss_myupj->getClientOriginalName());


        // Menyimpan data ke dalam database
        DB::table('pengajuan')->insert([
            'student_id'        => $student_id,
            'nama'              => $nama,
            'prodi'             => $prodi,
            'email'             => $email,
            'surat_permohonan'  =>  time() . "_" . $suratPermohonan->getClientOriginalName(),
            'surat_kronologi'   =>  time() . "_" . $suratKronologi->getClientOriginalName(),
            'sktm'              =>  time() . "_" . $sktm->getClientOriginalName(),
            'kartu_keluarga'    =>  time() . "_" . $kartuKeluarga->getClientOriginalName(),
            'transkip'          =>  time() . "_" . $transkipNilai->getClientOriginalName(),
            'ss_myupj'          =>  time() . "_" . $ss_myupj->getClientOriginalName(),
            'status'            => 'pending',
        ]);

        return redirect('student/pengajuan')->with('success', 'Pengajuan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
