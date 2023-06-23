<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $users = DB::table('users')->where('email', $request->email)->first();
            $id = $users->id;
            $student_id = $users->student_id;
            $name = $users->name;
            $email = $users->email;
            $role = $users->role;

            Session::start();
            $request->session()->put('id', $id);
            $request->session()->put('student_id', $student_id);
            $request->session()->put('name', $name);
            $request->session()->put('email', $email);
            $request->session()->put('role', $role);

            if ($role == 'admin') {
                return redirect()->intended('admin/dashboard');
            } else if ($role == 'moderator') {
                return redirect()->intended('moderator/dashboard');
            }
            // else if ($role == 'rectorate') {
            // //     return redirect()->intended('rectorate/dashboard');
            // // } 
            else {
                return redirect()->intended('student/dashboard');
            }
        } else {
            return redirect("login")->withSuccess('Login details are not valid');
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'student_id' => $data['student_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }

        return redirect("login")->withSuccess("You are not allowed to access");
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
