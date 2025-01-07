<?php

namespace App\Filament\Resources\DimensiDetailResource\Pages;

use App\Filament\Resources\DimensiDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDimensiDetail extends CreateRecord
{
    protected static string $resource = DimensiDetailResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
