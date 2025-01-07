<?php

namespace App\Filament\Resources\DimensiResource\Pages;

use App\Filament\Resources\DimensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDimensi extends EditRecord
{
    protected static string $resource = DimensiResource::class;

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
