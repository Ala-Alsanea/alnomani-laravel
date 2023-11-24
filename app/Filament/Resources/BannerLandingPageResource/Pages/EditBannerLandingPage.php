<?php

namespace App\Filament\Resources\BannerLandingPageResource\Pages;

use App\Filament\Resources\BannerLandingPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerLandingPage extends EditRecord
{
    protected static string $resource = BannerLandingPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
