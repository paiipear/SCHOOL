<?php

namespace App\Filament\Resources\MasterAddresses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class MasterAddressForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('postal_code')
                    ->label('Kode Pos')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(10),
                TextInput::make('subdistrict')
                    ->label('Kelurahan')
                    ->required()            
                    ->maxLength(10),
                TextInput::make('district')
                    ->label('Kecamatan')
                    ->required()
                    ->maxLength(10),
                TextInput::make('city_regency')
                    ->label('Kota/Kabupaten')
                    ->required()
                    ->maxLength(10),
                TextInput::make('province')
                    ->label('Provinsi')
                    ->required()
                    ->maxLength(10),           
            ]);
    }
}
