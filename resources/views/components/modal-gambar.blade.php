@php
    $thumbnails = $getRecord()->thumbnail ?? [];
    if (!is_array($thumbnails)) {
        $thumbnails = [$thumbnails];
    }
    $modalId = 'previewModal-' . $getRecord()->id;
@endphp

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<!-- Tombol -->
<button type="button" {{-- ✅ tambahkan ini --}}
    onclick="event.stopPropagation(); document.getElementById('{{ $modalId }}').showModal()"
    class="px-3 py-1 text-sm bg-blue-600 text-blue-600 underline-offset-1 rounded hover:bg-blue-700">
    Lihat Gambar
</button>

<!-- Modal -->
<dialog id="{{ $modalId }}" class="rounded-lg p-4 backdrop:bg-black/50 w-2/3 z-50">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold">Preview Gambar</h2>
        <button type="button" onclick="document.getElementById('{{ $modalId }}').close()"
            class="text-gray-500 hover:text-black">&times;</button>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($thumbnails as $img)
            <img src="{{ Storage::url($img) }}" alt="Foto berita"
                class="w-full h-40 object-cover rounded cursor-pointer hover:opacity-90"
                onclick="window.open('{{ Storage::url($img) }}', '_blank')">
        @endforeach
    </div>
</dialog>
