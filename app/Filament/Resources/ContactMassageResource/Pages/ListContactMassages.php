<?php

namespace App\Filament\Resources\ContactMassageResource\Pages;

use App\Filament\Resources\ContactMassageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactMassages extends ListRecords
{
    protected static string $resource = ContactMassageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
