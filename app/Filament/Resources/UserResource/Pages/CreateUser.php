<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\User;
use Filament\Notifications\Notification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function mount(): void
    {
        if (User::exists()) {
            // Opsional: tampilkan notifikasi
            Notification::make()
                ->title('User Admin sudah ada.')
                ->body('Silakan edit data admin yang sudah ada.')
                ->warning()
                ->send();

            // Redirect ke halaman edit record pertama (atau terbaru)
            $user = User::first(); // ganti ->latest()->first() jika mau yang terakhir
            $this->redirect(static::getResource()::getUrl('edit', ['record' => $user]));
            return;
        }

        parent::mount();
    }
}
