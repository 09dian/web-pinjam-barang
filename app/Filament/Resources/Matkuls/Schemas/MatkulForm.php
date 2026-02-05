<?php

namespace App\Filament\Resources\Matkuls\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class MatkulForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('name')
                ->label('Nama Mata Pelajaran')
                ->required(),
            ]);
    }
}
