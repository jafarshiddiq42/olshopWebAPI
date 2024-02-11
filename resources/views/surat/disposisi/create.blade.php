<x-app-layout>
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" /> --}}

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row justify-content-center">
                    <div class="col-10 ">
                        <div class="card ">
                            <div class="card-header">
                                <h5>Disposisi</h5>
                            </div>
                            <div class="card-body">
                                <form class="p-2" action="/createdisposisi" method="post" id="frmdisposisi">
                                    @csrf
                                    <div class="row">
                                        <div class="m-2 col align-self-center form-group">
                                            <label class="form-label" for=""> <i
                                                    class="fa-solid fa-people-group"></i> Tujuan
                                                Disposisi</label>
                                            <select class="form-select" id="tujuandisposisi" name="tujuandisposisi"
                                                id="" multiple>
                                                @forelse ($tujuans as $tujuan)
                                                    <option value="{{$tujuan->id}}">{{$tujuan->name}}</option>
                                                @empty                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="m-2 col"></div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class=" m-2 col">
                                            <label class="form-label" for="catatan"> <i
                                                    class="fa-solid fa-note-sticky"></i> Catatan</label>
                                            <input class="form-control" type="text" name="" id="">
                                            <label class="form-label" for="isidisposisi"> <i
                                                class="fa-solid fa-file-lines"></i> Isi
                                            Disposisi</label>
                                        <input class="form-control" type="text" name="isidisposisi"
                                            id="isidisposisi">
                                        </div>
                                        <div class=" m-2 col form-group">
                                            <div class="row">
                                                <label class="form-label" for="bataswaktu"> <i
                                                        class="fa-solid fa-calendar-day"></i> Batas
                                                    Waktu</label>
                                                <input class="form-control" type="date" name="bataswaktu"
                                                    id="bataswaktu">    
                                                
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-end">
                                    <div class=" text-end col mx-2"><button class="btn btn-primary" type="submit"><i
                                                class="fa-solid fa-paper-plane"></i> Kirim</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- form penambahan surat --}}


            </div>
        </div>
    </div>

    <script>
        $("#tujuandisposisi").select2({
            theme: "bootstrap-5",
            containerCssClass: "select2--small",
            dropdownCssClass: "select2--small",
        });
    </script>
    </x-app-layouts>
