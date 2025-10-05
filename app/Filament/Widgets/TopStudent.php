<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use App\Models\Grade;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class TopStudents extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Student::query()
                    ->with('grade')
                    ->whereHas('grade')
                    ->orderByDesc(
                        Grade::select('score')
                            ->whereColumn('grades.student_id', 'students.id')
                            ->limit(1)
                    )
                    ->limit(5)
            )
            ->columns([
               TextColumn::make('name')->label('Nama Siswa'),
               TextColumn::make('schoolClass.class_name')->label('Kelas'),
               TextColumn::make('grade.score')->label('Nilai'),
            ]);
    }
}
