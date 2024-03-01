<?php

namespace App\Filament\Resources\S3PolicyResource\Pages;

use App\Filament\Resources\S3PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListS3Policies extends ListRecords
{
    protected static string $resource = S3PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
