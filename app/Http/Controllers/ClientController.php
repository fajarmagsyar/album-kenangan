<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Beranda',
            'active' => 'beranda',
            'peserta' => Peserta::orderBy('ndh', 'ASC')->get(),
        ]);
    }

    public function galeri()
    {
        return view('galeri', [
            'title' => 'Galeri',
            'active' => 'galeri',
            'peserta' => Peserta::orderBy('ndh', 'ASC')->get(),
        ]);
    }

    public function detail($id)
    {
        $peserta = Peserta::find($id);
        return view('detail', [
            'title' => $peserta->nama_lengkap,
            'active' => 'galeri',
            'peserta' => $peserta,
        ]);
    }

    public function login()
    {
        return view('admin.login', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dash-admin/dashboard');
        }

        return redirect('/dash-admin')->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function dashboard()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'pesertaTotal' => Peserta::count(),
            'peserta' => Peserta::orderBy('ndh', 'asc')->get(),
        ]);
    }
}
