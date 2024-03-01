<?php

namespace App\Filament\Resources\S1PolicyResource\Pages;

use App\Filament\Resources\S1PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditS1Policy extends EditRecord
{
    protected static string $resource = S1PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
