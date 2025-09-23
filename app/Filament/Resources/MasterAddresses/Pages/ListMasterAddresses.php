<?php

namespace App\Filament\Resources\MasterAddresses\Pages;

use App\Filament\Resources\MasterAddresses\MasterAddressResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMasterAddresses extends ListRecords
{
    protected static string $resource = MasterAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
