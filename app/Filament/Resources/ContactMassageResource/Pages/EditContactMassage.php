<?php

namespace App\Filament\Resources\ContactMassageResource\Pages;

use App\Filament\Resources\ContactMassageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactMassage extends EditRecord
{
    protected static string $resource = ContactMassageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
