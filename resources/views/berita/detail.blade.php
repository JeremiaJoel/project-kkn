@extends('welcome') {{-- Atau layout utama kamu --}}

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-darkbrown mb-4">{{ $berita->judul }}</h1>

        @if (is_array($berita->thumbnail))
            <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ($berita->thumbnail as $img)
                    <img src="{{ asset('storage/' . $img) }}" class="w-full rounded shadow">
                @endforeach
            </div>
        @endif

        <div class="prose">
            {!! $berita->isi_berita !!}
        </div>

        <p class="text-sm text-darkyellow mt-6">
            Dipublikasikan pada: {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
        </p>
    </div>
@endsection
