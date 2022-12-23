<?php

namespace App\Http\Controllers;
use File;
use App\Models\Event;
use Illuminate\Http\Request;

class ManajemenEvent extends Controller
{
    public function index()
    {
        $data = [
            'event'=>Event::all()
        ];
        return view('admin.pages.kelola-event.index', $data);
    }

    public function create()
    {
        $data = [
            'action' => route('admin.store.event')
        ];

        return view('admin.pages.kelola-event.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/event');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['foto_event' => $filename]);
        Event::create($request->only(['judul_event','foto_event','tanggal_event','penyelenggara_event','penanggung_jawab_event','lokasi_event','desc_event','status_event']));
        return redirect()->route('admin.event')->with('success', 'Data Event berhasil di tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'event'  => Event::find($id),
            'action' => route('admin.update.event', $id)
        ];
        return view('admin.pages.kelola-event.form', $data);
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpg,jpeg,png,giff',
        ]);

        $data = Event::find($request->id);
        if ($request->hasFile('file')) {
            $path = public_path('images/event');
            if (file_exists($path . '/' . $data->foto_event)) {
                File::delete($path . '/' . $data->foto_event);
            }

            $file = $request->file('file');
            $filename = 'image_' . rand(0, 999999999999) . '_' . rand(0, 999999999999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        else{
            $filename = $event->foto_event;
        }

        $request->merge(['foto_event' => $filename]);
        Event::where('id', $request->id)->update($request->only(['judul_event','foto_event','tanggal_event','penyelenggara_event','penanggung_jawab_event','lokasi_event','desc_event','status_event']));
        return redirect()->route('admin.event')->with('success', 'Data Event berhasil di update');
    }

    public function destroy($id)
    {
        $data = Event::findOrFail($id);

        if (file_exists(public_path('images/event' . $data->foto_event))) {
            File::delete(public_path('images/event' . $data->foto_event));
        }
        $data->delete();
        return redirect()->route('admin.event')->with('success', 'Data event berhasil di Hapus');
    }
}
