<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeam extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TeamResource::class;

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
