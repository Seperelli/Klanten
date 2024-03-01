<?php

namespace App\Filament\Resources\S4PolicyResource\Pages;

use App\Filament\Resources\S4PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListS4Policies extends ListRecords
{
    protected static string $resource = S4PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
