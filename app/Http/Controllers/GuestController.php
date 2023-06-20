<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function syarat()
    {
        return view('pages.syarat');
    }
    public function tatacara()
    {
        return view('pages.tatacara');
    }
    public function faq()
    {
        return view('pages.faq');
    }
}
