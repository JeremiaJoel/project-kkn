<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Umkm;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UmkmResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UmkmResource\RelationManagers;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;
    // protected static ?string $navigationGroup = 'Kelola';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationLabel = 'UMKM';
    public static ?string $slug = 'kelola-umkm';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_umkm')
                    ->label('Nama Produk')
                    ->required(),
                TextInput::make('pemilik')
                    ->label('Nama Pemilik UMKM')
                    ->required(),
                Select::make('status')
                    ->required()
                    ->options([
                        'makanan' => 'Makanan',
                        // 'reviewing' => 'Reviewing',
                        // 'published' => 'Published',
                    ]),
                TextArea::make('deskripsi')
                    ->label('Deskripsi Produk')
                    ->required(),
                TextInput::make('alamat')
                    ->label('Lokasi UMKM')
                    ->required(),
                FileUpload::make('foto')
                    ->image()
                    ->multiple() // ⬅️ ini penting
                    ->directory('berita-galeri') // storage/app/public/berita-galeri
                    ->imagePreviewHeight('150')
                    ->required()
                    ->maxSize(2048),
                TextInput::make('instagram')
                    ->label('Link Instagram'),
                TextInput::make('whatsapp')
                    ->label('Link Whatsapp'),
                TextInput::make('shopee')
                    ->label('Link Shopee'),
                TextInput::make('tokopedia')
                    ->label('Link Tokopedia'),
                TextInput::make('tiktok')
                    ->label('Link Tiktok'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
}
