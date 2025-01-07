<?php

namespace App\Filament\Resources\DimensiDetailResource\Pages;

use App\Filament\Resources\DimensiDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDimensiDetails extends ListRecords
{
    protected static string $resource = DimensiDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
