@extends('master')

@section('title')
    List Kategori
@endsection

@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        KategoriID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nama kategori
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $kategori)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$kategori->KategoriID}}
                        </th>
                        <td class="px-6 py-4">
                            {{$kategori->namaKategori}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection