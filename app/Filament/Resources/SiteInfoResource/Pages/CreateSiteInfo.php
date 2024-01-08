<?php

namespace App\Filament\Resources\SiteInfoResource\Pages;

use App\Filament\Resources\SiteInfoResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteInfo extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = SiteInfoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make()
        ];
    }
}
