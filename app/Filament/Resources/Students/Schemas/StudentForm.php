<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\MasterAddress;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;    
use Filament\Schemas\Components\Fieldset as ComponentsFieldset;
use Filament\Schemas\Components\Group as ComponentsGroup;
use Filament\Schemas\Components\Section as ComponentsSection;
Use Illuminate\Support\Facades\Hash;



class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nisn')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(20),

            TextInput::make('name')
                ->required()
                ->label('Nama Lengkap')
                ->maxLength(100),

            Select::make('gender')
                ->label('Jenis Kelamin')
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ])
                ->required(),

            Select::make('school_classes_id')
                ->relationship('schoolClass', 'id') 
                ->getOptionLabelFromRecordUsing(fn ($record) => $record->ClassName) 
                ->label('Kelas'),
                
            ComponentsFieldset::make('Nilai Kelulusan')
                ->relationship('grade')                
                ->schema([
                    TextInput::make('score')  
                        ->numeric()
                        ->minValue(0)
                        ->maxValue(100),
                ]),
                
            ComponentsSection::make('Alamat Siswa')
                    ->schema([
                    ComponentsGroup::make([
                        TextInput::make('street')->required()->maxLength(200),
                        TextInput::make('number')->maxLength(20),
                        TextInput::make('rt')->maxLength(5),
                        TextInput::make('rw')->maxLength(5),
                        ])->columns(4),
                    Select::make('postal_code')
                            ->label('Kode Pos')
                            ->searchable()
                            ->required()
                            ->getSearchResultsUsing(function (string $search) {
                                return MasterAddress::query()
                                  ->when($search, fn($q) => $q->where('postal_code','like',"%$search%")
                                        ->orWhere('subdistrict','like',"%$search%")
                                        ->orWhere('district','like',"%$search%")
                                        ->orWhere('city_regency','like',"%$search%")
                                        ->orWhere('province','like',"%$search%"))
                                  ->limit(50)
                                  ->get()
                                  ->mapWithKeys(fn($r)=>[
                                    $r->postal_code => "{$r->postal_code} — {$r->subdistrict}, {$r->district}, {$r->city_regency}, {$r->province}"
                                  ])->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $r = MasterAddress::find($value);
                                return $r ? "{$r->postal_code} — {$r->subdistrict}, {$r->district}, {$r->city_regency}, {$r->province}" : null;
                            }),
                    ])
                    ->relationship('StudentAddress') // <= KUNCI: ini hasOne ke AlamatSiswa
                    ->columns(1),
        
            TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => !empty($state) ? Hash::make($state) : null)
                ->required(fn (string $context): bool => $context === 'create')
                ->dehydrated(fn ($state) => filled($state))
                ->hiddenOn('edit')
            ]);


    }
}
