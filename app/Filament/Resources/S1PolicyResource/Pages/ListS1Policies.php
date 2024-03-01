<?php

namespace App\Filament\Resources\S1PolicyResource\Pages;

use App\Filament\Resources\S1PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListS1Policies extends ListRecords
{
    protected static string $resource = S1PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
