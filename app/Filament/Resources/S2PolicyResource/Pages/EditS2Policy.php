<?php

namespace App\Filament\Resources\S2PolicyResource\Pages;

use App\Filament\Resources\S2PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditS2Policy extends EditRecord
{
    protected static string $resource = S2PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
