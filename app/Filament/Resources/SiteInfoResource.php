<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInfoResource\Pages;
use App\Filament\Resources\SiteInfoResource\RelationManagers;
use App\Models\SiteInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteInfoResource extends Resource
{
    protected static ?string $model = SiteInfo::class;

    protected static ?string $navigationGroup = "Settings";

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('id'),
                    Forms\Components\TextInput::make('name'),
                    Forms\Components\TextInput::make('description'),
                    Forms\Components\TextInput::make('email')->email(),
                    Forms\Components\TextInput::make('phone'),
                    Forms\Components\TextInput::make('location'),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('facebook_page'),
                    Forms\Components\TextInput::make('instagram_page'),
                    Forms\Components\TextInput::make('twitter_page'),
                    Forms\Components\TextInput::make('linkedin_page'),
                    Forms\Components\TextInput::make('tiktok_page'),
                    Forms\Components\TextInput::make('youtube_page'),
                    Forms\Components\TextInput::make('slider_video_url'),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('logo')->name('Logo White')->preserveFilenames()->image(),
                    Forms\Components\FileUpload::make('logo2')->name('Logo Black')->preserveFilenames()->image(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\ImageColumn::make('logo')->circular(),
                Tables\Columns\ImageColumn::make('logo2')->circular()
            ])
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
            'index' => Pages\ListSiteInfos::route('/'),
            'create' => Pages\CreateSiteInfo::route('/create'),
            'edit' => Pages\EditSiteInfo::route('/{record}/edit'),
        ];
    }
}
