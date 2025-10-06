<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\Action as ActionsAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('gender')
                    ->label('Jenis Kelamin')
                    ->badge()
                    ->colors([
                        'warning' => 'P',
                        'info' => 'L',
                    ]),

                TextColumn::make('schoolClass.class_name')
                    ->label('Kelas')
                    ->searchable(query: function ($query, $search) {
                        $query->whereHas('schoolClass', function ($q) use ($search) {
                            $q->where('grade_level', 'like', "%{$search}%")
                                ->orWhere('major', 'like', "%{$search}%")
                                ->orWhere('rombel', 'like', "%{$search}%");
                        });
                    }),

                TextColumn::make('grade.score')
                    ->label('Nilai')
                    ->searchable(),

                TextColumn::make('grade.result')
                    ->label('Keterangan')
                    ->searchable()
                    ->colors([
                        'success' => 'Lulus',
                        'danger' => 'Tidak Lulus',
                    ]),
                TextColumn::make('studentAddress.street')
                    ->label('Alamat')
                    ->formatStateUsing(fn ($state, $record) => (
                        $record->studentAddress && $record->studentAddress->masterAddress
                            ? implode('<br>', [
                                'Jl. ' . e($record->studentAddress->street) . (filled($record->studentAddress->number) ? ' No.' . e($record->studentAddress->number) : ''),
                                'RT ' . e($record->studentAddress->rt) . '/RW ' . e($record->studentAddress->rw),
                                e($record->studentAddress->masterAddress->subdistrict) . ', ' . e($record->studentAddress->masterAddress->district),
                                e($record->studentAddress->masterAddress->city_regency) . ', ' . e($record->studentAddress->masterAddress->province),
                                'Kode Pos: ' . e($record->studentAddress->postal_code),
                            ])
                            : '-'
                    ))
                    ->html()
                    ->searchable(query: function ($query, $search) {
                        $query->whereHas('studentAddress', function ($q) use ($search) {
                            $q->where('street', 'like', "%{$search}%")
                              ->orWhere('number', 'like', "%{$search}%")
                              ->orWhere('rt', 'like', "%{$search}%")
                              ->orWhere('rw', 'like', "%{$search}%")
                              ->orWhere('postal_code', 'like', "%{$search}%")
                              ->orWhereHas('masterAddress', function ($qq) use ($search) {
                                  $qq->where('subdistrict', 'like', "%{$search}%")
                                     ->orWhere('district', 'like', "%{$search}%")
                                     ->orWhere('city_regency', 'like', "%{$search}%")
                                     ->orWhere('province', 'like', "%{$search}%");
                              });
                        });
                    }),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([])

            ->recordActions([
                ActionsAction::make('lihat_qr')
                    ->label('Scan QR')
                    ->icon('heroicon-o-qr-code')
                    ->modalHeading('QR Code Siswa')
                    ->modalContent(fn ($record) => view('filament.columns.qr-code', [
                        'record' => $record,
                    ]))
                    ->modalWidth('lg')
                    ->modalSubmitAction(false)
                    ->modalActions(function ($action, $record) {
                        return [
                            $action->getModalCancelAction(),
                            ActionsAction::make('download_qr')
                                ->label('Download QR')
                                ->icon('heroicon-o-arrow-down-tray')
                                ->color('warning')
                                ->url(route('download.qr', $record->id), shouldOpenInNewTab: false),
                        ];
                    }),
                EditAction::make()->color('warning'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
