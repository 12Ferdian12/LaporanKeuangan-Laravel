@extends('master')

@section('title')
    Report
@endsection

@section('content')
    <div class="grid grid-cols-2 gap-4">
        <div class="border-2 border-black col-span-2 flex flex-col">
            <label for="">Balance:</label>
            {{ $Balance }}
        </div>
        <div class="border-2 border-black flex flex-col">
            <label for="">Income:</label>
            {{ $Pemasukan }}
        </div>
        <div class="border-2 border-black flex flex-col">
            <label for="">Outcome:</label>
            {{ $Pengeluaran }}
        </div>
    </div>
@endsection