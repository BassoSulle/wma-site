<?php

namespace App\Filament\Resources\PostersResource\Pages;

use App\Filament\Resources\PostersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosters extends ListRecords
{
    protected static string $resource = PostersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
