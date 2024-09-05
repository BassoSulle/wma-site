<?php

namespace App\Filament\Resources\FormsResource\Pages;

use App\Filament\Resources\FormsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForms extends EditRecord
{
    protected static string $resource = FormsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
