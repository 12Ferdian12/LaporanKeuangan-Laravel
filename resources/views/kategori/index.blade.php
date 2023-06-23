@extends('master')

@section('title')
    List Kategori
@endsection

@section('content')
    <div class="relative overflow-x-auto">
        <a href="{{route('kategori.create')}}">
            @if(auth()->user()->role == 'Admin')
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mr-1 mb-2">
                    Create
                </button>
            @endif
        </a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        KategoriID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        nama kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        aksi
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
                        <td class="px-6 py-4 grid gap-1 grid-cols-2 w-1/3">
                            @if(auth()->user()->role == 'Admin')
                                <a href="{{route('kategori.edit',[ 'id' => $kategori->KategoriID])}}" >
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-1">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{route('kategori.delete',[ 'id' => $kategori->KategoriID])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection