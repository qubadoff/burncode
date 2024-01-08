<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateProject extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ProjectResource::class;
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

