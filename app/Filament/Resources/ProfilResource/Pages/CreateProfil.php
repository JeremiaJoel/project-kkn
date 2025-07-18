<?php

namespace App\Filament\Resources\ProfilResource\Pages;

use App\Filament\Resources\ProfilResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Profil;
use Filament\Notifications\Notification;

class CreateProfil extends CreateRecord
{
    protected static string $resource = ProfilResource::class;

    public function mount(): void
    {
        if (Profil::exists()) {
            // Opsional: tampilkan notifikasi
            Notification::make()
                ->title('Profil sudah ada.')
                ->body('Silakan edit data profil yang sudah ada.')
                ->warning()
                ->send();

            // Redirect ke halaman edit record pertama (atau terbaru)
            $profil = Profil::first(); // ganti ->latest()->first() jika mau yang terakhir
            $this->redirect(static::getResource()::getUrl('edit', ['record' => $profil]));
            return;
        }

        parent::mount();
    }
}
