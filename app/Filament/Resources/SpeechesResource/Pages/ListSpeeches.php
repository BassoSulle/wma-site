<?php

namespace App\Filament\Resources\SpeechesResource\Pages;

use App\Filament\Resources\SpeechesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpeeches extends ListRecords
{
    protected static string $resource = SpeechesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
