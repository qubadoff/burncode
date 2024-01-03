<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsCategoryResource\Pages;
use App\Models\NewsCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class NewsCategoryResource extends Resource
{
    protected static ?string $model = NewsCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "News";

    protected static ?int $navigationSort = 1;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('description'),
                    Forms\Components\TextInput::make('slug')->required(),
                    Forms\Components\FileUpload::make('image')->image(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id")->sortable(),
                Tables\Columns\TextColumn::make("sort")->sortable(),
                Tables\Columns\TextColumn::make("name")->sortable()->searchable(),
                Tables\Columns\TextColumn::make("slug"),
                Tables\Columns\TextColumn::make("created_at")->sortable(),
            ])
            ->reorderable('sort')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNewsCategories::route('/'),
            'create' => Pages\CreateNewsCategory::route('/create'),
            'edit' => Pages\EditNewsCategory::route('/{record}/edit'),
        ];
    }
}
