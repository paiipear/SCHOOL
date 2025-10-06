<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;   
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Filament\Notifications\Notification; 

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),

            Action::make('importExcel')
                ->label('Import Excel/CSV')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->form([
                    FileUpload::make('file')
                        ->label('File Excel / CSV')
                        ->storeFiles(false) 
                        ->acceptedFileTypes([
                            'text/csv',
                            'application/vnd.ms-excel',
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                        ])
                        ->required(),
                ])
                ->action(function (array $data): void {
                    /** @var TemporaryUploadedFile $uploaded */
                    $uploaded = $data['file'];
                    $path = $uploaded->getRealPath(); 

                    try {
                        Excel::import(new StudentsImport, $path);

                        Notification::make()
                            ->title('Import selesai')
                            ->body('Data siswa berhasil diproses.')
                            ->success()
                            ->send();
                    } catch (\Throwable $e) {
                        Notification::make()
                            ->title('Import gagal')
                            ->body($e->getMessage())
                            ->danger()
                            ->send();
                      
                    }
                }),
        ];
    }
}
