<?php

namespace App\Filament\Resources\BannerLandingPageResource\Pages;

use App\Filament\Resources\BannerLandingPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBannerLandingPage extends ViewRecord
{
    protected static string $resource = BannerLandingPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
