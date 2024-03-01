<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class RapportPartner extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Rapport Partners';
    protected static ?string $navigationGroup = 'Partners';
    protected static ?int $navigationSort = 0;
    protected static string $view = 'filament.pages.rapport-partner';

}
