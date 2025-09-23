<?php

namespace App\Filament\Resources\Grades\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class GradesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               
               TextColumn::make('student.name')
                    ->label('Siswa')
                    ->sortable()
                    ->searchable(),

               TextColumn::make('score')
                    ->label('Nilai')
                    ->sortable(),

               BadgeColumn::make('result')
                    ->label('Keterangan')
                    ->colors([
                        'success' => 'Lulus',
                        'danger' => 'Tidak Lulus',
                    ]),
                
               TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

               TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
