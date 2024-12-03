<?php

namespace App\Filament\Resources\BrochuresResource\Pages;

use App\Filament\Resources\BrochuresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrochures extends EditRecord
{
    protected static string $resource = BrochuresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
