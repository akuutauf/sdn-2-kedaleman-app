<?php

namespace App\Http\Controllers;
use File;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class ManajemenPrestasi extends Controller
{
    public function index()
    {
        $data = [
            'prestasi'=>Prestasi::all()
        ];
        return view('admin.pages.kelola-prestasi.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.prestasi')
        ];

        return view('admin.pages.kelola-prestasi.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/prestasi');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_prestasi' => $filename]);
        Prestasi::create($request->only(['judul_prestasi','foto_prestasi','nama_perlombaan','tanggal_prestasi','peraih_prestasi','desc_prestasi']));
        return redirect()->route('admin.prestasi')->with('success', 'Data Prestasi berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'prestasi'  => Prestasi::find($id),
            'action' => route('admin.update.prestasi', $id)
        ];
        return view('admin.pages.kelola-prestasi.form', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = Prestasi::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/prestasi');
            if (file_exists($path . '/' . $data->foto_prestasi)) {
                File::delete($path . '/' . $data->foto_prestasi);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_prestasi' => $filename]);
        Prestasi::where('id', $request->id)->update($request->only(['judul_prestasi','foto_prestasi','nama_perlombaan','tanggal_prestasi','peraih_prestasi','desc_prestasi']));
        return redirect()->route('admin.prestasi')->with('success', 'Data Prestasi berhasil di update');
    }

    public function destroy($id)
    {
        $data = Prestasi::findOrFail($id);

        if (file_exists(public_path('images/prestasi' . $data->foto_prestasi))) {
            File::delete(public_path('images/prestasi' . $data->foto_prestasi));
        }
        $data->delete();
        return redirect()->route('admin.prestasi')->with('success', 'Data Prestasi berhasil di Hapus');
    }
}
