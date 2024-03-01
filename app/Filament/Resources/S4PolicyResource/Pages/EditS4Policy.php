<?php

namespace App\Filament\Resources\S4PolicyResource\Pages;

use App\Filament\Resources\S4PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditS4Policy extends EditRecord
{
    protected static string $resource = S4PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
