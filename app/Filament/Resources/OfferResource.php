<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Filament\Resources\OfferResource\RelationManagers;
use App\Models\Offer;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Offers";


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make("order")->default("1"),
                TextInput::make("title")->required()->label("Name"),
                Textarea::make("excerpt")->label("Excerpt"),
                RichEditor::make("body")->required()->label("Body"),
                FileUpload::make("image")->label("Image")->image(),
                TextInput::make("slug")->label("Slug")->required(),
                Select::make("status")->options([
                    'active' => 'Active',
                    'de_active' => 'De active'
                ])->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id")->label("id"),
                Tables\Columns\TextColumn::make("title")->label("title"),
                Tables\Columns\TextColumn::make("status")->label("Status"),
                Tables\Columns\TextColumn::make("created_at")->label("Created at"),
            ])->reorderable("order")
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }
}
