<?php

namespace App\Filament\Resources\ContactMassageResource\Pages;

use App\Filament\Resources\ContactMassageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContactMassage extends ViewRecord
{
    protected static string $resource = ContactMassageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
