<?php

namespace App\Filament\Resources\S3PolicyResource\Pages;

use App\Filament\Resources\S3PolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditS3Policy extends EditRecord
{
    protected static string $resource = S3PolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
