<?php

namespace App\Filament\Resources\RegionOfficesResource\Pages;

use App\Filament\Resources\RegionOfficesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegionOffices extends ListRecords
{
    protected static string $resource = RegionOfficesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
