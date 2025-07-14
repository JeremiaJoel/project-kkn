<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBerita extends CreateRecord
{
    protected static string $resource = BeritaResource::class;

    // Redirect ke index setelah berhasil create
    protected function getRedirectUrl(): string
    {
        return BeritaResource::getUrl('index'); // ⬅️ redirect ke halaman list/index
    }

    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Berita berhasil ditambahkan!';
    }
}
