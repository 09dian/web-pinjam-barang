<?php

namespace App\Filament\Resources\Pinjamen\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class PinjamenTable
{
    public static function configure(Table $table): Table
    {
       
             return $table
            ->columns([

                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama Peminjam')
                    ->searchable(),

                TextColumn::make('name_barang')
                    ->label('Nama Barang')
                    ->wrap()
                    ->searchable(),
                    TextColumn::make('name_guru')
                    ->label('Nama Guru')
                    ->wrap()
                    ->searchable(),
                    TextColumn::make('matpel')
                    ->label('Mata Pelajaran')
                    ->wrap()
                    ->searchable(),
                    TextColumn::make('kelas')
                    ->label('Kelas'),

                TextColumn::make('date_meminjam')
                    ->label('Tanggal Pinjam')
                    ->date(),

                TextColumn::make('date_mengembalikan')
                    ->label('Tanggal Kembali')
                    ->date(),

                TextColumn::make('penerima')
                    ->label('Penerima'),

            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
