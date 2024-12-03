<?php

namespace App\Filament\Resources\WelcomeNoteResource\Pages;

use App\Filament\Resources\WelcomeNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWelcomeNote extends EditRecord
{
    protected static string $resource = WelcomeNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
