<?php

namespace App\Filament\Resources\MasterAddresses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MasterAddressesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('postal_code')
                    ->label('Kode Pos')
                    ->searchable(),

                TextColumn::make('subdistrict')
                    ->label('Kelurahan')
                    ->searchable(),

                TextColumn::make('district')
                    ->label('Kecamatan')
                    ->searchable(),
                TextColumn::make('city_regency')
                    ->label('Kota/Kabupaten')
                    ->searchable(),
                TextColumn::make('province')
                    ->label('Provinsi')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
