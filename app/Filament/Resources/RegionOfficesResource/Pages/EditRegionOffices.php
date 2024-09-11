<?php

namespace App\Filament\Resources\RegionOfficesResource\Pages;

use App\Filament\Resources\RegionOfficesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegionOffices extends EditRecord
{
    protected static string $resource = RegionOfficesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
