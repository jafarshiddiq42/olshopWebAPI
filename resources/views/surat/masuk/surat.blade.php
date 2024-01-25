<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 leading-tight">
            {{ __('Surat Masuk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-4">
                    <table class="table" id="myTable">
                        <thead>
                            <th>No.</th>
                            <th>File</th>
                            <th>Asal Surat</th>
                            <th>Klasifikasi</th>
                            <th>No. Surat / Tanggal Surat</th>
                            <th width=20%>Tindakan</th>
                        </thead>
                        <tbody style="vertical-align: middle">

                            @forelse ($surats as $surat)
                                <tr>
                                    <td>1</td>
                                    <td>belum ada file</td>
                                    <td>{{ $surat->asalSurat }}</td>
                                    <td>{{ $surat->klasifikasi->nama }}</td>
                                    <td>{{ $surat->noSurat }}</td>
                                    <td>
                                        <a href="" class="m-1 btn btn-warning">Disp</a>
                                        <a href="" class="m-1 btn btn-info">Print</a>
                                        @if (Auth()->user()->hakuser->id == 1)
                                            <a href="" class="m-1 btn btn-primary">Edit</a>
                                            <a href="" class="m-1 btn btn-danger">Del</a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
