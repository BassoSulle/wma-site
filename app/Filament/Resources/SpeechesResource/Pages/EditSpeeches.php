<?php

namespace App\Filament\Resources\SpeechesResource\Pages;

use App\Filament\Resources\SpeechesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpeeches extends EditRecord
{
    protected static string $resource = SpeechesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
