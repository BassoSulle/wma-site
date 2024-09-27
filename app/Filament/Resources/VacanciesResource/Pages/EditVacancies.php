<?php

namespace App\Filament\Resources\VacanciesResource\Pages;

use App\Filament\Resources\VacanciesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacancies extends EditRecord
{
    protected static string $resource = VacanciesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
