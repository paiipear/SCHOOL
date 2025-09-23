<?php

namespace App\Filament\Resources\SchoolClasses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SchoolClassForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('grade_level')
                        ->label('Tingkat')
                        ->required()
                        ->maxLength(10),

                TextInput::make('major')
                        ->label('Jurusan')
                        ->required()
                        ->maxLength(50),

                TextInput::make('rombel')
                        ->label('Rombel')
                        ->required()
                        ->maxLength(10),
            
            ]);
    }
}
