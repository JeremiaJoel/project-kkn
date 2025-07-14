<div class="modal fade" id="modalDetailBerita" tabindex="-1" aria-labelledby="modalDetailBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-darkyellow text-darkbrown">
                <h5 class="modal-title font-bold" id="modalDetailBeritaLabel">Detail Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-darkbrown">
                <p class="mb-2"><strong>Judul:</strong> <span id="modal-judul"></span></p>
                <p class="mb-2"><strong>Tanggal:</strong> <span id="modal-tanggal"></span></p>
                <p class="mb-4"><strong>Isi Berita:</strong></p>
                <div id="modal-isi"></div>
                {{-- <div id="modal-gambar-wrapper" class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Gambar akan dimasukkan lewat JS -->
                </div> --}}
            </div>
            <div class="modal-footer bg-gray-100">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
