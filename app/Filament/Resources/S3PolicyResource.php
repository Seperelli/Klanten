<?php

namespace App\Filament\Resources;

use App\Filament\Resources\S3PolicyResource\Pages;
use App\Filament\Resources\S3PolicyResource\RelationManagers;
use App\Models\S3Policy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class S3PolicyResource extends Resource
{
    protected static ?string $model = S3Policy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    Protected static ?string $navigationGroup = 'Buren';

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
            'index' => Pages\ListS3Policies::route('/'),
            'create' => Pages\CreateS3Policy::route('/create'),
            'edit' => Pages\EditS3Policy::route('/{record}/edit'),
        ];
    }
}
