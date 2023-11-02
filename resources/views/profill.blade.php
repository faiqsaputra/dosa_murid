<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <input type="hidden" name="nis">
    <div class="bg-blue-500 text-white text-4xl font-bold py-10">
        <div class="container mx-auto text-center">
            {{ config('app.name', 'Laravel') }}
        </div>
    </div>

    <section class="w-screen h-screen border-solid border-2 border-slate-600 w-full h-full flex justify-center text-center bg-slate-300">
        <div class="w-[80%] h-48  border-solid border-2 border-red-600 bg-white justify-center flex text-center ">
            <div class="h-[10rem] w-[10rem] border-solid border-2">
                <img src="{{asset('img/yinyang.png')}}" class="h-48">
            </div>
            <div>
                <div class="text-4xl font-semibold h-[10rem] w-[30rem] mt-6">nis yang dikirim : {{$nis}}</div>
                @if ($siswa==null)
                <div class="text-lg text-center">..:: siswa tidak ditemukan</div>
                @else
                <div class="text-lg font-semibold mb-3">Nama : {{$siswa->nama}}</div>
                <div class="text-lg font-semibold mb-3">Nisn : {{$siswa->nisn}}</div>
                <div class="text-lg font-semibold mb-3">Kelas : {{$siswa->kelas->nama_kelas}}</div>
                <div class="text-lg font-semibold mb-3">Jurusan : {{$siswa->kelas->jurusan->nama_jurusan}}</div>
                <div class="text-lg font-semibold mb-3">Alamat : {{$siswa->alamat}}</div>
            @endif
            </div>
            
        </div>
        
    </section>
</body>
</html>