<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectCategory extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ProjectCategoryResource::class;

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
