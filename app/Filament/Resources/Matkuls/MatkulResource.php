<?php

namespace App\Filament\Resources\Matkuls;

use App\Filament\Resources\Matkuls\Pages\CreateMatkul;
use App\Filament\Resources\Matkuls\Pages\EditMatkul;
use App\Filament\Resources\Matkuls\Pages\ListMatkuls;
use App\Filament\Resources\Matkuls\Schemas\MatkulForm;
use App\Filament\Resources\Matkuls\Tables\MatkulsTable;
use App\Models\Matkul;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MatkulResource extends Resource
{
    protected static ?string $model = Matkul::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MatkulForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MatkulsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMatkuls::route('/'),
            'create' => CreateMatkul::route('/create'),
            'edit' => EditMatkul::route('/{record}/edit'),
        ];
    }
}
