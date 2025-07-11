<?php

namespace App\Filament\Resources;

use App\Models\RW;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RWResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RWResource\RelationManagers;

class RWResource extends Resource
{
    protected static ?string $model = RW::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'RW';
    public static ?string $slug = 'kelola-rw';
    public static ?string $label = 'kelola rw';
    // protected static ?string $navigationGroup = 'Kelola';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ketua_rw')
                    ->label('Nama ketua RW')
                    ->required(),
                TextInput::make('nama_rw')
                    ->label('Nama RW')
                    ->required(),
                TextInput::make('alamat')
                    ->label('Alamat RW')
                    ->required(),
                TextInput::make('kontak')
                    ->label('nomor telepon')
                    ->required()
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->validationMessages([
                        'regex' => 'Nomor telepon tidak valid',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('ketua_rw')
                    ->label('Nama ketua RW'),
                TextColumn::make('alamat')
                    ->label('Alamat'),
                TextColumn::make('kontak')

            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\EditAction::make(),
            ]);
        // ->bulkActions([
        //     Tables\Actions\BulkActionGroup::make([
        //         Tables\Actions\DeleteBulkAction::make(),
        //     ]),
        // ]);
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
            'index' => Pages\ListRWS::route('/'),
            'create' => Pages\CreateRW::route('/create'),
            'edit' => Pages\EditRW::route('/{record}/edit'),
        ];
    }
}
