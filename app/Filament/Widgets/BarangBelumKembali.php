<?php

namespace App\Filament\Widgets;

use App\Models\Pinjaman;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use Filament\Tables\Columns\TextInputColumn;

class BarangBelumKembali extends TableWidget
{protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        ToggleButtons::make('status')
    ->options([
        'draft' => 'Draft',
    ]);
        return $table
            ->query(fn (): Builder => Pinjaman::query())
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('name_barang')
                    ->searchable(),
                TextColumn::make('name_guru')
                    ->searchable(),
                TextColumn::make('matpel')
                    ->searchable(),
                TextColumn::make('kelas')
                    ->searchable(),
                TextColumn::make('date_meminjam')
                    ->date()
                    ->sortable(),
              TextColumn::make('date_mengembalikan')
    ->badge()
    ->placeholder('Belum Kembali')
    ->color(fn ($state) => $state ? 'success' : 'danger')
    ->formatStateUsing(fn ($state) => 
        $state ? 'Sudah Kembali' : 'Belum Kembali'
    ),
                TextColumn::make('penerima')
                    ->searchable(),
                TextInputColumn::make('catatan')
                ->label('Catatan')
                ->placeholder('Tulis catatan di sini')
                ->columnSpan(2) 
                ->sortable(),
                  ToggleColumn::make('action')
                    ->label('Kembalikan')
                    ->onColor('success')
                    ->offColor('danger')

                    ->afterStateUpdated(function ($record, $state) {

                        if ($state) {

                            $record->update([
                                'date_mengembalikan' => now(),
                                'action' => true,
                            ]);

                            Notification::make()
                                ->title('Barang berhasil dikembalikan')
                                ->success()
                                ->send();

                        }
                    }),
                    
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
