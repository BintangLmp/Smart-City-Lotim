<?php

namespace App\Filament\Resources\DimensiDetailResource\Pages;

use App\Filament\Resources\DimensiDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimensiDetail extends EditRecord
{
    protected static string $resource = DimensiDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
