<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="card ">
                    <div class="card-header"><h5>Tambah Surat Masuk</h5></div>
                    <div class="card-body">
                        <form action="/createsuratmasuk" method="post" id="frmsuratmasuk" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">No. Surat</label>
                                        <input type="text" class="form-control" name="nosurat" placeholder="123">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Klasifikasi Surat</label>
                                        <select class="form-control" name="klasifikasi">
                                            <option value="0" selected>-- Pilih klasfikasi --</option>
                                            @forelse ($klasifikasis as $klasifikasi)
                                                <option value="{{ $klasifikasi->id }}">{{ $klasifikasi->nama }}
                                                </option>
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
                                        placeholder="BPJS, Kemhan">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="">Tanggal Masuk</label>
                                    <input type="date" name="tglmasuk" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3">
                                    <label for="">Tanggal Diterima</label>
                                    <input type="date" name="tglditerima" class="form-control" id="">
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
                                        placeholder="Keterangan / judul surat">
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="#" onclick=' document.getElementById("frmsuratmasuk").submit();' class="btn btn-primary">Simpan</a>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- form penambahan surat --}}


            </div>
        </div>
    </div>

    </x-app-layouts>
