<?php

namespace App\Filament\Resources\Matkuls\Pages;

use App\Filament\Resources\Matkuls\MatkulResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMatkul extends EditRecord
{
    protected static string $resource = MatkulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
