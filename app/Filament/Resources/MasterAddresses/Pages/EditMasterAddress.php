<?php

namespace App\Filament\Resources\MasterAddresses\Pages;

use App\Filament\Resources\MasterAddresses\MasterAddressResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterAddress extends EditRecord
{
    protected static string $resource = MasterAddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
