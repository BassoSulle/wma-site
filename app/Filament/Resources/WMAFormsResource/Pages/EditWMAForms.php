<?php

namespace App\Filament\Resources\WMAFormsResource\Pages;

use App\Filament\Resources\WMAFormsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWMAForms extends EditRecord
{
    protected static string $resource = WMAFormsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
