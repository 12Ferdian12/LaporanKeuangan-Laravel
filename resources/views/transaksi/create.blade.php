@extends('master')

@section('title')
    create transaksi
@endsection

@section('content')
    
<form class="border border-3 p-2" action="{{route('transaksi.store')}}" method="POST">
@csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Create transaksi</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 pl-3">
                <div class="">
                    <label for="TransaksiName" class="block text-sm font-medium leading-6 text-gray-900">Transaksi Name</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                            <input type="text" name="TransaksiName" id="TransaksiName" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Transaksi">
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="Nominal" class="block text-sm font-medium leading-6 text-gray-900">Nominal</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                            <input type="number" name="Nominal" id="Nominal" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="Type" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                            <select name="Type" id="Type" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                                <option value="pengeluaran">Pengeluaran</option>
                                <option value="pemasukan">Pemasukan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="Category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                            <select name="Category" id="Category" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
                                @foreach($kategoris as $kategori)
                                    <option value="{{$kategori->KategoriID}}">{{$kategori->namaKategori}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="">
                    <label for="Date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 ">
                            <input type="date" name="Date" id="Date" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                        </div>
                    </div>
                </div>
            </div>
            <button class="bg-amber-200 p-1 rounded mt-10" type="submit">
                Tambah
            </button>
        </div>
    </div>
</form>


@endsection