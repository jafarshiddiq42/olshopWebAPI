<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="card ">
                    <div class="card-header">
                        <h5>Tambah Surat Masuk</h5>
                    </div>
                    <div class="card-body">
                        <form action="/editsuratmasuk/{{$suratmasuk->id}}" method="post" id="frmsuratmasuk" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">No. Surat</label>
                                        <input type="text" class="form-control" disabled name="nosurat"
                                            placeholder="123" value="{{ $suratmasuk->noSurat }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Klasifikasi Surat</label>
                                        <select class="form-control" name="klasifikasi">
                                            @forelse ($klasifikasis as $klasifikasi)
                                                @if ($klasifikasi->id == $suratmasuk->klasifikasi_id)
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
                                <div class="form-group mb-3">
                                    <label for="">Asal Surat</label>
                                    <input type="text" class="form-control" name="asalsurat" id=""
                                        value="{{ $suratmasuk->asalSurat }}" placeholder="BPJS, Kemhan">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="">Tanggal Masuk</label>
                                    <input type="date" name="tglmasuk" value="{{ date($suratmasuk->tglsuratmasuk) }}"
                                        class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="">Tanggal Diterima</label>
                                    <input type="date" name="tglditerima"
                                        value="{{ date($suratmasuk->tglsuratditerima) }}" class="form-control"
                                        id="">
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
                                    <input type="text" name="keterangan" class="form-control" id=""
                                        value="{{ $suratmasuk->keterangan }}" placeholder="Keterangan / judul surat">
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="#" onclick=' document.getElementById("frmsuratmasuk").submit();'
                                    class="btn btn-primary">Simpan</a>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- form penambahan surat --}}


            </div>
        </div>
    </div>

    </x-app-layouts>
