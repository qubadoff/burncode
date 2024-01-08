<?php

namespace App\Filament\Resources\SiteInfoResource\Pages;

use App\Filament\Resources\SiteInfoResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteInfo extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = SiteInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            LocaleSwitcher::make()
        ];
    }
}
