<?php

namespace App\Http\Controllers;
use File;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class ManajemenPengumuman extends Controller
{
    public function index()
    {
        $data = [
            'pengumuman' => Pengumuman::all(),

        ];
        return view('admin.pages.kelola-pengumuman.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.pengumuman')
        ];
        return view('admin.pages.kelola-pengumuman.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('dokumen/pengumuman');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['lampiran_pengumuman' => $filename]);
        Pengumuman::create($request->only(['judul_pengumuman', 'pembuat_pengumuman', 'penerima_pengumuman', 'perihal_pengumuman', 'tanggal_pengumuman', 'isi_pengumuman', 'lampiran_pengumuman']));
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'pengumuman'  => Pengumuman::find($id),
            'action' => route('admin.update.pengumuman', $id)
        ];
        return view('admin.pages.kelola-pengumuman.form', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx|max:10240',
        ]);

        $data = Pengumuman::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('dokumen/pengumuman');
            if (file_exists($path . '/' . $data->lampiran_pengumuman)) {
                File::delete($path . '/' . $data->lampiran_pengumuman);
            }

            $file = $request->file('file');
            $filename = 'doc_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['lampiran_pengumuman' => $filename]);
        Pengumuman::where('id', $request->id)->update($request->only(['judul_pengumuman', 'pembuat_pengumuman', 'penerima_pengumuman', 'perihal_pengumuman', 'tanggal_pengumuman', 'isi_pengumuman', 'lampiran_pengumuman']));
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil di Update');
    }

    public function destroy($id)
    {
        $data = Pengumuman::findOrFail($id);

        if (file_exists(public_path('dokumen/pengumuman' . $data->lampiran_pengumuman))) {
            File::delete(public_path('dokumen/pengumuman' . $data->lampiran_pengumuman));
        }
        $data->delete();
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil di Hapus');
    }

}
