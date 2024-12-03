<?php

namespace App\Filament\Resources\WelcomeNoteResource\Pages;

use App\Filament\Resources\WelcomeNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWelcomeNote extends CreateRecord
{
    protected static string $resource = WelcomeNoteResource::class;
}
