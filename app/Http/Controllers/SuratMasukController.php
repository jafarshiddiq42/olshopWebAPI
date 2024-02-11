<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use App\Models\Suratmasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = Suratmasuk::all();
        return view('surat.masuk.surat', compact('surats'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $klasifikasis = Klasifikasi::all();
        return view('surat.masuk.create', compact('klasifikasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suratmasuk = new Suratmasuk();
        $suratmasuk->noSurat = $request->nosurat;
        $suratmasuk->klasifikasi_id = $request->klasifikasi;
        $suratmasuk->asalSurat = $request->asalsurat;
        $suratmasuk->tglsuratmasuk = $request->tglmasuk;
        $suratmasuk->tglsuratditerima = $request->tglditerima;
        $suratmasuk->user_id = Auth()->user()->id;
        $suratmasuk->notif = 0;

        if ($request->file('file')) {
            $file = $request->file('file');
            $namafile = time() . "_" . $file->getClientOriginalName();
            $dirname = 'upload';
            $file->move($dirname,$namafile);
            $suratmasuk->file = $dirname."/".$namafile;
        }
        $suratmasuk->keterangan = $request->keterangan;
        $suratmasuk->save();
        return redirect()->route('suratmasuk');
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
        $suratmasuk = Suratmasuk::where('id',$id)->first();
        $klasifikasis = Klasifikasi::all();
        return view('surat.masuk.edit',compact('suratmasuk','klasifikasis'));
        // dd($suratmasuk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $suratmasuk = Suratmasuk::where('id',$id)->first();
       
        // $suratmasuk->noSurat = $request->nosurat;
        $suratmasuk->klasifikasi_id = $request->klasifikasi;
        $suratmasuk->asalSurat = $request->asalsurat;
        $suratmasuk->tglsuratmasuk = $request->tglmasuk;
        $suratmasuk->tglsuratditerima = $request->tglditerima;
        $suratmasuk->user_id = Auth()->user()->id;
        $suratmasuk->notif = 0;

        if ($request->file('file')) {
            $file = $request->file('file');
            $namafile = time() . "_" . $file->getClientOriginalName();
            $dirname = 'upload';
            $file->move($dirname,$namafile);
            $suratmasuk->file = $dirname."/".$namafile;
        }
        $suratmasuk->keterangan = $request->keterangan;
        $suratmasuk->save();

        return redirect()->route('suratmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suratmasuk = Suratmasuk::where('id',$id)->first();
        $suratmasuk->delete();
    }

    public function openfile(string $id){
        $suratmasuk =  Suratmasuk::where('id',$id)->first();
        $file= asset($suratmasuk->file);
        return redirect($file);
    }
}
