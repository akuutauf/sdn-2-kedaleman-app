<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Motivasi;
use App\Models\Guru;
use Illuminate\Http\Request;

class ManajemenMotivasi extends Controller
{
    public function index()
    {
        $data = [
            'guru' => Guru::all(),
            'motivasi' => Motivasi::all()
        ];
        return view('admin.pages.kelola-motivasi.index', $data);
    }

    public function create()
    {
        $data = [
            'guru' => Guru::all(),
            'action' => route('admin.store.motivasi')
        ];
        return view('admin.pages.kelola-motivasi.create', $data);
    }

    public function store(Request $request)
    {
        Motivasi::create($request->all());
        return redirect()->route('admin.motivasi')->with('success', 'Motivasi berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'guru' => Guru::all(),
            'motivasi'  => Motivasi::find($id),
            'action' => route('admin.update.motivasi', $id)
        ];
        return view('admin.pages.kelola-motivasi.form', $data);
    }

    public function update(Request $request)
    {
        Motivasi::where('id', $request->id)->update($request->only(['id_guru', 'pesan_motivasi', 'status_motivasi']));
        return redirect()->route('admin.motivasi')->with('success', 'Motivasi berhasil di Update');
    }

    public function destroy($id)
    {
        Motivasi::where('id', $id)->delete();
        return redirect()->route('admin.motivasi')->with('success', 'Motivasi berhasil di Hapus');
    }

}
