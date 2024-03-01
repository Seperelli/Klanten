<?php

namespace App\Filament\Resources;

use App\Filament\Resources\S1PolicyResource\Pages;
use App\Filament\Resources\S1PolicyResource\RelationManagers;
use App\Models\S1Policy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class S1PolicyResource extends Resource
{
    protected static ?string $model = S1Policy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    Protected static ?string $navigationGroup = 'Eigen Mensen';

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
            'index' => Pages\ListS1Policies::route('/'),
            'create' => Pages\CreateS1Policy::route('/create'),
            'edit' => Pages\EditS1Policy::route('/{record}/edit'),
        ];
    }
}
