<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dimensi;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\DimensiResource\Pages;
use App\Filament\Resources\DimensiDetailResource\RelationManagers\DimensiRelationManager;

class DimensiResource extends Resource
{
    protected static ?string $model = Dimensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Dimensi';
    protected static ?string $pluralLabel = 'Dimensi';

    /**
     * Form schema for creating/editing records.
     */
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->label('Nama Dimensi')
                    ->placeholder('Contoh: Smart Governance')
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->placeholder('Slug otomatis berdasarkan nama')
                    ->disabled()
                    ->readonly(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Singkat')
                    ->placeholder('Masukkan deskripsi singkat'),
            ]);
    }

    /**
     * Table schema for listing records.
     */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Dimensi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi Singkat')
                    ->limit(50),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    /**
     * Relation managers for the resource.
     */
    public static function getRelations(): array
    {
        return [
            DimensiRelationManager::class,
        ];
    }

    /**
     * Pages configuration for the resource.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDimensis::route('/'),
            'create' => Pages\CreateDimensi::route('/create'),
            'edit' => Pages\EditDimensi::route('/{record}/edit'),
        ];
    }
}
