<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 leading-tight">
            {{ __('Surat Masuk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card m-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h5>Surat Masuk</h5>
                            </div>
                            <div class="col text-end"><a href="{{ route('buatsuratmasuk') }}"
                                    class="btn btn-primary">tambah surat</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="myTable">
                            <thead>
                                <th>No.</th>
                                <th>Keterangan</th>
                                <th>Asal Surat</th>
                                <th>Klasifikasi</th>
                                <th>No. Surat / Tanggal Surat</th>
                                <th>Tindakan</th>
                            </thead>
                            <tbody style="vertical-align: middle">

                                @forelse ($surats as $surat)
                                    <tr>
                                        <td>1</td>
                                        <td width=25%>
                                            {{$surat->keterangan}}
                                        </td>
                                        <td>{{ $surat->asalSurat }}</td>
                                        <td>{{ $surat->klasifikasi->nama }}</td>
                                        <td class="text-end">{{ $surat->noSurat . ' | ' . $surat->tglsuratditerima }}
                                        </td>
                                        <td>
                                            <a href="{{route('buatdisposisimasuk',['jenis'=>"1",'id'=>$surat->id])}}" class="m-1 btn btn-warning">
                                                <i class="fas fa-share"></i>
                                            </a>
                                            <a href="/suratmasuk/{{$surat->id}}" class="btn btn-small btn-primary" target=”_blank” >
                                                <i class="fa-solid fa-print"></i>
                                            </a>
                                            @if (Auth()->user()->hakuser->id == 1)
                                                <a href="/editsuratmasuk/{{ $surat->id }}"
                                                    class="m-1 btn btn-primary">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                            @endif
                                            <button type="button" class="m-1 btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalsurat{{$surat->id}}">
                                                <i class="fas fa-trash"></i>                                            
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalsurat{{$surat->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    anda yakin ingin menghapus surat dari {{ $surat->asalSurat }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>

                                                        <form action="{{route('hapussuratmasuk',['id'=>$surat->id])}}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger ">Ya, Hapus</button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @empty
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
