<?php

namespace App\Filament\Resources\Pinjamen\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PinjamanForm
{
    public static function configure(Schema $schema): Schema
    {
       return $schema
        ->components([

            TextInput::make('name')
                ->label('Nama Peminjam')
                ->required(),

            TextInput::make('name_barang')
                ->label('Nama Barang/Alat')
                ->required(),
                TextInput::make('name_guru')
                ->label('Nama Guru')
                ->required(),
                TextInput::make('matpel')
                ->label('Mata Pelajaran')
                ->required(),
                TextInput::make('kelas')
                ->label('Kelas')
                ->required(),

            DatePicker::make('date_meminjam')
                ->label('Tanggal Pinjam')
                ->required(),

            DatePicker::make('date_mengembalikan')
                ->label('Tanggal Kembali'),

            TextInput::make('penerima')
                ->label('Penerima/yang memijamkan'),
        ]);
    }
}
