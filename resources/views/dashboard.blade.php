<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    {{-- {{ __("You're logged in!") }} --}}
                    <a href="{{Route('suratmasuk')}}" class=" m-3 btn btn-lg btn-primary">Surat Masuk</a>
                    <a href="" class=" m-3 btn btn-lg btn-warning">Surat Keluar</a>
                    <a href="" class=" m-3 btn btn-lg btn-danger">Belum Disposisi</a>
                    <a href="" class=" m-3 btn btn-lg btn-success">Per-Klasifikasi</a>
                    @if (Auth()->user()->hakuser->id == 1)
                    <a href="" class=" m-3 btn btn-lg btn-info">Jumlah Pengguna</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
