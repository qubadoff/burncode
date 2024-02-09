<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ProductResource::class;
}
