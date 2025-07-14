<div class="grid grid-cols-1 gap-4">
    @php
        $gambarList = [];

        if (is_array($record->thumbnail)) {
            $gambarList = $record->thumbnail;
        } elseif (is_string($record->thumbnail)) {
            $decoded = json_decode($record->thumbnail, true);
            $gambarList = is_array($decoded) ? $decoded : [$record->thumbnail];
        }
    @endphp

    @forelse ($gambarList as $gambar)
        <img src="{{ asset('storage/' . $gambar) }}" class="rounded shadow w-full object-cover" alt="Gambar berita">
    @empty
        <p class="text-gray-500 text-sm">Tidak ada gambar.</p>
    @endforelse
</div>
