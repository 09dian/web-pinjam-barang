<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('name')
                ->label('Nama Guru')
                ->required(),
            ]);
    }
}
