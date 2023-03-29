<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function tambah()
    {
        return view('admin.tambah', [
            'title' => 'Tambah Peserta',
            'active' => 'tambah-peserta',
        ]);
    }
    public function edit($id)
    {
        return view('admin.edit', [
            'title' => 'Edit Peserta',
            'active' => 'edit-peserta',
            'peserta' => Peserta::find($id),
        ]);
    }
    public function simpan(Request $request)
    {

        $doc_name = 'foto/' . 'foto-' . date('Y-m-d_H-i-s') . rand(0, 100000) . '.' . $request->file('foto')->getClientOriginalExtension();

        $input = [
            'foto' => $doc_name,
            'ndh' => $request->input('ndh'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nip' => $request->input('nip'),
            'jabgol' => $request->input('jabgol'),
            'alamat' => $request->input('alamat'),
            'hp' => $request->input('hp'),
            'instansi' => $request->input('instansi'),
            'judul_laporan' => $request->input('judul_laporan'),
            'file_laporan' => $request->input('file_laporan'),
            'pesan' => $request->input('pesan'),
            'kesan' => $request->input('kesan'),
        ];

        $request->file('foto')->move(public_path('foto'), $doc_name);

        Peserta::create($input);

        return redirect('/dash-admin/dashboard')->with('success', 'Data berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $input = [
            'ndh' => $request->input('ndh'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nip' => $request->input('nip'),
            'jabgol' => $request->input('jabgol'),
            'alamat' => $request->input('alamat'),
            'hp' => $request->input('hp'),
            'instansi' => $request->input('instansi'),
            'judul_laporan' => $request->input('judul_laporan'),
            'file_laporan' => $request->input('file_laporan'),
            'pesan' => $request->input('pesan'),
            'kesan' => $request->input('kesan'),
        ];

        if ($request->hasFile('foto')) {
            $doc_name = 'foto/' . 'foto-' . date('Y-m-d_H-i-s') . rand(0, 100000) . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('foto'), $doc_name);
            $input['foto'] = $doc_name;
        }

        Peserta::where('peserta_id', $id)->update($input);

        return redirect('/dash-admin/dashboard')->with('success', 'Data berhasil dihapus');
    }
    public function hapus($id)
    {
        Peserta::destroy($id);

        return redirect('/dash-admin/dashboard')->with('success', 'Data berhasil dihapus');
    }
}
