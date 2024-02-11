<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use App\Models\Suratkeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = Suratkeluar::all();
        return view('surat.keluar.surat', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $klasifikasis = Klasifikasi::all();
        return view('surat.keluar.create', compact('klasifikasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suratkeluar = new Suratkeluar();
        $suratkeluar->nosurat = $request->nosurat;
        $suratkeluar->noagenda = $request->noagenda;
        $suratkeluar->klasifikasi_id = $request->klasifikasi;
        $suratkeluar->tujuan = $request->tujuan;
        $suratkeluar->tglsurat = $request->tglsurat;
        $suratkeluar->tglcatat = $request->tglcatat;
        $suratkeluar->user_id = Auth()->user()->id;
        $suratkeluar->notif = 0;

        if ($request->file('file')) {
            $file = $request->file('file');
            $namafile = time() . "_" . $file->getClientOriginalName();
            $dirname = 'upload';
            $file->move($dirname, $namafile);
            $suratkeluar->file = $dirname . "/" . $namafile;
        }
        $suratkeluar->keterangan = $request->keterangan;
        $suratkeluar->save();
        return redirect()->route('suratkeluar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suratkeluar =Suratkeluar::where('id',$id)->first();
        $klasifikasis = Klasifikasi::all();
        return view('surat.keluar.edit', compact('klasifikasis','suratkeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $suratkeluar = Suratkeluar::where('id',$id)->first();

        $suratkeluar->noagenda = $request->noagenda;
        $suratkeluar->klasifikasi_id = $request->klasifikasi;
        $suratkeluar->tujuan = $request->tujuan;
        $suratkeluar->tglsurat = $request->tglsurat;
        $suratkeluar->tglcatat = $request->tglcatat;
        $suratkeluar->user_id = Auth()->user()->id;
        $suratkeluar->notif = 0;

        if ($request->file('file')) {
            $file = $request->file('file');
            $namafile = time() . "_" . $file->getClientOriginalName();
            $dirname = 'upload';
            $file->move($dirname, $namafile);
            $suratkeluar->file = $dirname . "/" . $namafile;
        }
        $suratkeluar->keterangan = $request->keterangan;
        $suratkeluar->save();
        return redirect()->route('suratkeluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suratkeluar = Suratkeluar::where('id',$id)->delete();
        return redirect()->route('suratkeluar');
    }

    public function openfile(string $id)
    {
        $suratmasuk =  Suratkeluar::where('id', $id)->first();
        $file = asset($suratmasuk->file);
        return redirect($file);
    }
}
