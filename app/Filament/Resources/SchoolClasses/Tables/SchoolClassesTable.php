<?php

namespace App\Filament\Resources\SchoolClasses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SchoolClassesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('grade_level')
                    ->label('Tingkat')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('major')
                    ->label('Jurusan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('rombel')
                    ->label('Rombel')
                    ->sortable()
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
