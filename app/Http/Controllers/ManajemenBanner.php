<?php

namespace App\Http\Controllers;
use File;
use App\Models\Banner;
use Illuminate\Http\Request;

class ManajemenBanner extends Controller
{
    public function index()
    {
        $data = [
            'banner'=>Banner::all()
        ];
        return view('admin.pages.kelola-banner.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.banner')
        ];

        return view('admin.pages.kelola-banner.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/banner');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_banner' => $filename]);
        Banner::create($request->only(['nama_banner','foto_banner','status_banner']));
        return redirect()->route('admin.banner')->with('success', 'Data Banner berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'banner'  => Banner::find($id),
            'action' => route('admin.update.banner', $id)
        ];
        return view('admin.pages.kelola-banner.form', $data);
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpg,jpeg,png,giff',
        ]);

        $data = Banner::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/banner');
            if (file_exists($path . '/' . $data->foto_banner)) {
                File::delete($path . '/' . $data->foto_banner);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        else{
            $filename = $banner->foto_banner;
        }

        $request->merge(['foto_banner' => $filename]);
        Banner::where('id', $request->id)->update($request->only(['nama_banner','foto_banner','status_banner']));
        return redirect()->route('admin.banner')->with('success', 'Data Banner berhasil di update');
    }

    public function destroy($id)
    {
        $data = Banner::findOrFail($id);

        if (file_exists(public_path('images/banner' . $data->foto_banner))) {
            File::delete(public_path('images/banner' . $data->foto_banner));
        }
        $data->delete();
        return redirect()->route('admin.banner')->with('success', 'Data Banner berhasil di Hapus');
    }
}
