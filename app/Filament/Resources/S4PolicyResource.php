<?php

namespace App\Filament\Resources;

use App\Filament\Resources\S4PolicyResource\Pages;
use App\Filament\Resources\S4PolicyResource\RelationManagers;
use App\Models\S4Policy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class S4PolicyResource extends Resource
{
    protected static ?string $model = S4Policy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    Protected static ?string $navigationGroup = 'Klanten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListS4Policies::route('/'),
            'create' => Pages\CreateS4Policy::route('/create'),
            'edit' => Pages\EditS4Policy::route('/{record}/edit'),
        ];
    }
}
