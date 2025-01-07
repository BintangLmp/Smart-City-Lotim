<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinasiResource\Pages;
use App\Models\Destinasi;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class DestinasiResource extends Resource
{
    protected static ?string $model = Destinasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationLabel = 'Destinasi Wisata';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Section::make('Informasi Destinasi')->schema([
                    TextInput::make('nama')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Forms\Set $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    Hidden::make('slug')
                        ->required(),
                    RichEditor::make('deskripsi'),
                ]),

                Section::make('Informasi Tambahan')->schema([
                    FileUpload::make('gambar')
                        ->required()
                        ->label('Gambar'),
                    TextInput::make('lokasi')
                        ->required()
                        ->label('Lokasi'),
                    TextInput::make('jam_operasional')
                        ->required()
                        ->label('Jam Operasional'),
                    TextInput::make('harga')
                        ->numeric()
                        ->required()
                        ->label('Harga Tiket'),
                ])->columns(2),

                Toggle::make('is_published')
                    ->label('Publikasikan')
                    ->default(0)
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        $set('published_at', now()->format('Y-m-d H:i'));
                    }),
                Hidden::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->disabled(fn(?Destinasi $record): bool => !$record->is_published)
                    ->reactive()
                    ->dehydrated(fn(?string $state): ?string => $state ? Carbon::parse($state)->format('Y-m-d H:i') : null)
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar'),
                TextColumn::make('nama')
                    ->sortable(),
                TextColumn::make('lokasi'),
                TextColumn::make('harga')
                    ->money('IDR'),
                TextColumn::make('created_at')->date()->sortable(),
                TextColumn::make('is_published')
                    ->badge()
                    ->label('Status')
                    ->color(fn($record) => $record->is_published ? 'success' : 'info')
                    ->formatStateUsing(fn($record) => $record->is_published ? 'Published' : 'Draft'),
            ])
            ->searchable()
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Status')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Draft',
                    ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDestinasis::route('/'),
            'create' => Pages\CreateDestinasi::route('/create'),
            'edit' => Pages\EditDestinasi::route('/{record}/edit'),
        ];
    }
}