<?php

namespace App\Filament\Resources\WelcomeNoteResource\Pages;

use App\Filament\Resources\WelcomeNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWelcomeNotes extends ListRecords
{
    protected static string $resource = WelcomeNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
