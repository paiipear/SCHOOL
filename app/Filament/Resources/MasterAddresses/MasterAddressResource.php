<?php

namespace App\Filament\Resources\MasterAddresses;

use App\Filament\Resources\MasterAddresses\Pages\CreateMasterAddress;
use App\Filament\Resources\MasterAddresses\Pages\EditMasterAddress;
use App\Filament\Resources\MasterAddresses\Pages\ListMasterAddresses;
use App\Filament\Resources\MasterAddresses\Schemas\MasterAddressForm;
use App\Filament\Resources\MasterAddresses\Tables\MasterAddressesTable;
use App\Models\MasterAddress;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MasterAddressResource extends Resource
{
    protected static ?string $model = MasterAddress::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form( $schema): Schema
    {
        return MasterAddressForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MasterAddressesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMasterAddresses::route('/'),
            'create' => CreateMasterAddress::route('/create'),
            'edit' => EditMasterAddress::route('/{record}/edit'),
        ];
    }
    protected static ?string $navigationLabel = 'Alamat Utama';
    protected static ?string $pluralModelLabel = 'Alamat Utama';
    protected static ?string $modelLabel = 'Alamat Utama';
}
