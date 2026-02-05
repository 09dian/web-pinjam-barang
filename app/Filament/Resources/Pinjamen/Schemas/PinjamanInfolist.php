<?php

namespace App\Filament\Resources\Pinjamen\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class PinjamanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama Peminjam'),

                TextEntry::make('name_barang')
                    ->label('Nama Barang'),
                TextEntry::make('name_guru')
                    ->label('Nama Guru'),
                TextEntry::make('matpel')
                    ->label('Mata Pelajaran'),
                TextEntry::make('kelas')
                    ->label('Kelas'),
                TextEntry::make('date_meminjam')
                    ->label('Tanggal Pinjam'),

                TextEntry::make('date_mengembalikan')
                    ->label('Tanggal Kembali'),

                TextEntry::make('penerima')
                    ->label('Penerima'),
            ]);
    }
}
