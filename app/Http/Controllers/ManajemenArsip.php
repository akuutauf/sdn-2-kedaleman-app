<?php

namespace App\Http\Controllers;

use File;
use App\Models\Arsip;
use Illuminate\Http\Request;

class ManajemenArsip extends Controller
{
    public function index()
    {
        $data = [
            'arsip' => Arsip::all(),

        ];
        return view('admin.pages.kelola-arsip.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.arsip')
        ];
        return view('admin.pages.kelola-arsip.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('dokumen/arsip');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['kode_file_arsip' => $filename]);
        Arsip::create($request->only(['nama_file_arsip', 'kode_file_arsip', 'jenis_file_arsip', 'tanggal_upload_arsip', 'desc_file_arsip']));
        return redirect()->route('admin.arsip')->with('success', 'Data Arsip berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'arsip'  => Arsip::find($id),
            'action' => route('admin.update.arsip', $id)
        ];
        return view('admin.pages.kelola-arsip.form', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240',
        ]);

        $data = Arsip::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('dokumen/arsip');
            if (file_exists($path . '/' . $data->kode_file_arsip)) {
                File::delete($path . '/' . $data->kode_file_arsip);
            }

            $file = $request->file('file');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['kode_file_arsip' => $filename]);
        Arsip::where('id', $request->id)->update($request->only(['nama_file_arsip', 'kode_file_arsip', 'jenis_file_arsip', 'tanggal_upload_arsip', 'desc_file_arsip']));
        return redirect()->route('admin.arsip')->with('success', 'Data Arsip berhasil di Update');
    }

    public function destroy($id)
    {
        $data = Arsip::findOrFail($id);

        if (file_exists(public_path('dokumen/arsip' . $data->kode_file_arsip))) {
            File::delete(public_path('dokumen/arsip' . $data->kode_file_arsip));
        }
        $data->delete();
        return redirect()->route('admin.arsip')->with('success', 'Data Arsip berhasil di Hapus');
    }
}
