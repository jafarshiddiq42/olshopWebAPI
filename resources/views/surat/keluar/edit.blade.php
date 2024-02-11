<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="card ">
                    <div class="card-header">
                        <h5>Tambah Surat Keluar</h5>
                    </div>
                    <div class="card-body">
                        <form action="/editsuratkeluar/{{$suratkeluar->id}}" method="post" id="frmsuratkeluar" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">No. Surat</label>
                                        <input type="text" class="form-control" value="{{ $suratkeluar->nosurat }}"
                                            name="nosurat" placeholder="123">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">No. Agenda</label>
                                        <input type="text" value="{{ $suratkeluar->noagenda }}" class="form-control"
                                            name="noagenda" placeholder="123">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Tujuan</label>
                                        <input type="text"
                                        value="{{$suratkeluar->tujuan}}"
                                        class="form-control" name="tujuan" id=""
                                            placeholder="BPJS, Kemhan">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Klasifikasi Surat</label>
                                        <select class="form-control" name="klasifikasi">
                                            @forelse ($klasifikasis as $klasifikasi)
                                                @if ($klasifikasi->id == $suratkeluar->klasifikasi_id)
                                                    <option selected value="{{ $klasifikasi->id }}">
                                                        {{ $klasifikasi->nama }}
                                                    </option>
                                                @else
                                                    <option value="{{ $klasifikasi->id }}">{{ $klasifikasi->nama }}
                                                    </option>
                                                @endif
                                            @empty
                                                <option value="-">error</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Tanggal Surat</label>
                                        <input type="date" value="{{$suratkeluar->tglsurat}}" name="tglsurat" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Tanggal Catat</label>
                                        <input type="date"
                                        value="{{$suratkeluar->tglcatat}}"
                                        name="tglcatat" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="formFile">File</label>
                                    <input type="file" name="file" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="">Keterangan</label>
                                    <input type="text"
                                    value="{{$suratkeluar->keterangan}}"
                                    name="keterangan" class="form-control" id=""
                                        placeholder="Keterangan / judul surat">
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" onclick='document.getElementById("frmsuratkeluar").submit();'
                                    class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- form penambahan surat --}}


            </div>
        </div>
    </div>

    </x-app-layouts>
