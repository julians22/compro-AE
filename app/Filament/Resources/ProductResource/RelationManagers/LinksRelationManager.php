<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinksRelationManager extends RelationManager
{
    protected static string $relationship = 'links';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Radio::make('marketplace')
                    ->required()
                    ->options([
                        'tokopedia' => 'Tokopedia',
                        'shopee' => 'Shopee'
                    ])
                    ->hint('Select the marketplace'),
                TextInput::make('url')
                    ->required()
                    ->url()
                    ->prefix('https://')
                    ->hint('Insert the url from the marketplace you selected')
                    ->suffixIcon('heroicon-m-globe-alt')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('marketplace')
            ->columns([
                Tables\Columns\TextColumn::make('marketplace'),
                Tables\Columns\TextColumn::make('url'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
