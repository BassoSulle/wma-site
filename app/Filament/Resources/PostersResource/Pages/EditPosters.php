<?php

namespace App\Filament\Resources\PostersResource\Pages;

use App\Filament\Resources\PostersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPosters extends EditRecord
{
    protected static string $resource = PostersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
