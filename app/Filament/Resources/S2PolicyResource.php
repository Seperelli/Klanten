<?php

namespace App\Filament\Resources;

use App\Filament\Resources\S2PolicyResource\Pages;
use App\Filament\Resources\S2PolicyResource\RelationManagers;
use App\Models\S2Policy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class S2PolicyResource extends Resource
{
    protected static ?string $model = S2Policy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    Protected static ?string $navigationGroup = 'Partners';

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
            'index' => Pages\ListS2Policies::route('/'),
            'create' => Pages\CreateS2Policy::route('/create'),
            'edit' => Pages\EditS2Policy::route('/{record}/edit'),
        ];
    }
}
