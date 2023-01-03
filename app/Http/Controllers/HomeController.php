<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Guru;
use App\Models\Motivasi;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            Guru::all(),
            'guru' => Guru::where('jabatan_guru', "!=", "Kepala Sekolah")->orderBy('nama_guru', 'ASC')->get(),
            'kepsek' => Guru::where('jabatan_guru', "Kepala Sekolah")->get(),
            'motivasi' => Motivasi::all(),
            'banner' => Banner::where('status_banner', "Aktif")->latest()->take(5)->get(),
            'count_guru' => Guru::count(),
            'count_event' => Event::count(),
            'count_arsip' => Arsip::count(),
            'count_prestasi' => Prestasi::count(),
            'latest_event' => Event::latest()->take(3)->get(),
            'latest_pengumuman' => Pengumuman::latest()->take(3)->get(),
            'latest_prestasi' => Prestasi::latest()->take(3)->get(),
        ];
        return view('pengunjung.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
