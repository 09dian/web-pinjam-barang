<?php

namespace App\Filament\Resources\Pinjamen\Schemas;

use App\Models\Kelas;
use App\Models\Matkul;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
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
               select::make('name_guru')
                ->label('Guru Pengajar')
                ->relationship('guru', 'name')
                ->required(),
                Select::make('matpel')
    ->label('Mata Pelajaran')
    ->options(function () {
        return Matkul::pluck('name', 'id'); 
    })
    ->required(),
                Select::make('kelas')
                ->label('Kelas')->options(function () {
        return Kelas::pluck('name', 'id'); 
    })
    ->required(),

            DatePicker::make('date_meminjam')
                ->label('Tanggal Pinjam')
                ->default(now())
                ->required(),

            DatePicker::make('date_mengembalikan')
                ->label('Tanggal Kembali')->default(now()),

            TextInput::make('penerima')
                ->label('Penerima/yang memijamkan'),
        ]);
    }
}
