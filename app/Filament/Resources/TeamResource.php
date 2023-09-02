<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make("name")->required(),
                    Forms\Components\TextInput::make("description"),
                    Forms\Components\TextInput::make("slug")->required(),
                    Forms\Components\TextInput::make("facebook_page"),
                    Forms\Components\TextInput::make("instagram_page"),
                    Forms\Components\TextInput::make("twitter_page"),
                    Forms\Components\TextInput::make("linkedin_page"),
                    Forms\Components\TextInput::make("tiktok_page"),
                    Forms\Components\RichEditor::make("body"),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image')
                    ->enableOpen()
                    ->enableDownload()
                    ->image()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id")->sortable(),
                Tables\Columns\TextColumn::make("sort")->sortable(),
                Tables\Columns\TextColumn::make("name")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("description"),
                Tables\Columns\ImageColumn::make("image")->circular(),
                Tables\Columns\TextColumn::make("created_at")->sortable()
            ])
            ->reorderable()
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
