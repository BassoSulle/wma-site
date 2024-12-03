<?php

namespace App\Filament\Resources\HowDoIResource\Pages;

use App\Filament\Resources\HowDoIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHowDoI extends EditRecord
{
    protected static string $resource = HowDoIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
