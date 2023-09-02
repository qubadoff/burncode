<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;



class ProjectResource extends Resource
{

    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = "Projects";
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Card::make([
                        Forms\Components\TextInput::make('name')->required(),
                        Forms\Components\TextInput::make('description'),
                        Forms\Components\TextInput::make('slug')->required(),
                        Forms\Components\TextInput::make('project_link')->required(),
                        Forms\Components\TextInput::make('client_info')->required(),
                        Forms\Components\Select::make('cat_id')->relationship('category', 'name')->required(),
                        Forms\Components\RichEditor::make('body')->required(),
                    ]),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('sort')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('project_link'),
                Tables\Columns\ImageColumn::make('image')->circular()
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
