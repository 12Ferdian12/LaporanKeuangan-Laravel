@extends('master')

@section('title')
    create kategori
@endsection

@section('content')
@if(count($errors) > 0)
    @foreach($errors->all() as $e)
        <span class="text-red-600">
            {{$e}}
        </span>
        <br>
    @endforeach
@endif

<form class="border border-3 p-2" action="{{route('kategori.store')}}" method="POST">
@csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Create Kategori</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                <div class="sm:col-span-4">
                    <label for="CategoryName" class="block text-sm font-medium leading-6 text-gray-900">Category Name</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="CategoryName" id="CategoryName" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith" required>
                        </div>
                       
                    </div>
                </div>
            </div>
            <button class="bg-amber-200 p-1 rounded" type="submit">
                Tambah
            </button>
        </div>
    </div>
</form>


@endsection