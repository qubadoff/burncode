<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = FaqResource::class;

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
