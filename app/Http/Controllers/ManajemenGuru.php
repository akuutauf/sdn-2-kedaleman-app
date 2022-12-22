<?php

namespace App\Http\Controllers;
use File;
use App\Models\Guru;
use Illuminate\Http\Request;

class ManajemenGuru extends Controller
{

    public function index()
    {
        $data = [
            'guru'=>Guru::all()
        ];
        return view('admin.pages.kelola-guru.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.guru')
        ];

        return view('admin.pages.kelola-guru.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/guru');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_guru' => $filename]);
        Guru::create($request->only(['nama_guru', 'foto_guru', 'nik_guru', 'nuptk_guru', 'nip_guru', 'gender_guru', 'tempat_lahir_guru', 'tanggal_lahir_guru', 'jabatan_guru', 'email_guru', 'no_telp_guru', 'alamat_guru', 'status_guru']));
        return redirect()->route('admin.guru')->with('success', 'Data Guru berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'guru'  => Guru::find($id),
            'action' => route('admin.update.guru', $id)
        ];
        return view('admin.pages.kelola-guru.form', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = Guru::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/guru');
            if (file_exists($path . '/' . $data->foto_guru)) {
                File::delete($path . '/' . $data->foto_guru);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['foto_guru' => $filename]);
        Guru::where('id', $request->id)->update($request->only(['nama_guru', 'foto_guru', 'nik_guru', 'nuptk_guru', 'nip_guru', 'gender_guru', 'tempat_lahir_guru', 'tanggal_lahir_guru', 'jabatan_guru', 'email_guru', 'no_telp_guru', 'alamat_guru', 'status_guru']));
        return redirect()->route('admin.guru')->with('success', 'Data Guru berhasil di update');
    }

    public function destroy($id)
    {
        $data = Guru::findOrFail($id);

        if (file_exists(public_path('images/guru' . $data->foto_guru))) {
            File::delete(public_path('images/guru' . $data->foto_guru));
        }
        $data->delete();
        return redirect()->route('admin.guru')->with('success', 'Data Guru berhasil di Hapus');
    }

}
