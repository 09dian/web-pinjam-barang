<?php

namespace App\Filament\Resources\Matkuls\Pages;

use App\Filament\Resources\Matkuls\MatkulResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMatkuls extends ListRecords
{
    protected static string $resource = MatkulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
