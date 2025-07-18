<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;




class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    // protected static ?string $navigationGroup = 'Kelola';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Berita RW';
    public static ?string $slug = 'kelola-berita';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul berita')
                    ->required(),
                TextArea::make('isi_berita')
                    ->label('Isi')
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal Publikasi')
                    ->required(),

                FileUpload::make('thumbnail')
                    ->label('Foto')
                    ->image()
                    ->multiple() // ⬅️ ini penting
                    ->directory('berita-galeri') // storage/app/public/berita-galeri
                    ->imagePreviewHeight('150')
                    ->required()
                    ->maxSize(2048)
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tanggal')
                    ->label('Tanggal Publikasi')
                    ->date('d M Y')
                    ->sortable(),

                ViewColumn::make('thumbnail_preview')
                    ->label('Preview Gambar')
                    ->view('components.modal-gambar'),
            ])
            ->recordUrl(null) // ⬅️ Matikan klik otomatis pada baris
            ->filters([
                //
            ])
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
