<?php

namespace App\Filament\Resources\Grades\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class GradeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student', 'name') 
                    ->label('Siswa')
                    ->searchable()
                    ->required(),

                TextInput::make('score')
                    ->label('Nilai')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(100),

                TextInput::make('result')
                    ->label('Keterangan')
                    ->disabled() 
                    ->dehydrated(false), 
            
            ]);
    }
}
