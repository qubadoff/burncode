<?php

namespace App\Filament\Resources\SiteInfoResource\Pages;

use App\Filament\Resources\SiteInfoResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteInfos extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = SiteInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            LocaleSwitcher::make()
        ];
    }
}
