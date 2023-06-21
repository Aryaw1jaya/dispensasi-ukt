<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('pages.admin.dashboard', ['users' => $users]);
    }

    public function create()
    {
        return view('pages.admin.add-user');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('admin/dashboard');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('pages.admin.edit-user', ['user' => $user]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('admin/dashboard');
    }

    public function editPassword($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('pages.admin.new-password', ['user' => $user]);
    }

    public function updatePassword(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'password' => Hash::make($request->password),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('admin/dashboard');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('admin/dashboard');
    }
}
