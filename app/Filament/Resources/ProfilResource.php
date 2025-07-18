<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profil;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfilResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfilResource\RelationManagers;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Profil RW';
    public static ?string $slug = 'kelola-profil';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama RW')
                    ->required(),
                TextArea::make('deskripsi')
                    ->label('Deskripsi Profil RW')
                    ->required(),
                FileUpload::make('foto')
                    ->label('Foto Profil RW')
                    ->image()
                    // ->multiple() // ⬅️ ini penting
                    ->directory('profil-galeri') // storage/app/public/berita-galeri
                    ->imagePreviewHeight('150')
                    ->required()
                    ->maxSize(2048)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi Profil')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->height(60),
            ])
            ->recordUrl(null) // biar klik baris gak auto-edit
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        // Kalau sudah ada minimal 1 record, blokir create
        return \App\Models\Profil::count() === 0;
    }
}
