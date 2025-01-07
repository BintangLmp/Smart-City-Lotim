<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DimensiDetail;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DimensiDetailResource\Pages;
use App\Filament\Resources\DimensiDetailResource\RelationManagers;

class DimensiDetailResource extends Resource
{
    protected static ?string $model = DimensiDetail::class;

    protected static ?string $navigationGroup = 'Detail';
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informasi Tambahan')->schema([
                TextInput::make('judul')
                    ->required()
                    ->label('Judul Aplikasi')
                    ->placeholder('Contoh: LaporBup'),
                    
                Select::make('nama')
                    ->relationship('dimensi', 'nama')
                    ->options(fn () => \App\Models\Dimensi::pluck('nama', 'id'))
                    ->label('Dimensi'),

                Textarea::make('konten')
                    ->label('Deskripsi Singkat')
                    ->placeholder('Masukkan deskripsi singkat Terkait Aplikasi'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul Sistem')
                    ->sortable()
                    ->searchable(),
                    TextColumn::make('dimensi.nama') 
                    ->label('Dimensi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('konten')
                    ->label('Deskripsi Singkat')
                    ->limit(50),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            // Tambahkan relation manager jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDimensiDetails::route('/'),
            'create' => Pages\CreateDimensiDetail::route('/create'),
            'edit' => Pages\EditDimensiDetail::route('/{record}/edit'),
        ];
    }
}