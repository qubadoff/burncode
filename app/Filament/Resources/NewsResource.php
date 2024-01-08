<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class NewsResource extends Resource
{

    use Translatable;

    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "News";

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make("title")->required(),
                    Forms\Components\RichEditor::make('description'),
                    Forms\Components\RichEditor::make('meta_description'),
                    Forms\Components\RichEditor::make('meta_keywords'),
                    Forms\Components\RichEditor::make('body'),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('slug')->required(),
                    Forms\Components\Select::make('cat_id')
                        ->relationship('category', 'name')
                        ->getOptionLabelFromRecordUsing(function ($record){
                            return $record->translate('name', app()->getLocale());
                        })
                        ->required(),
                    Forms\Components\Hidden::make('author_id')->default(auth()->user()->id),
                    Forms\Components\Select::make('status')
                    ->options([
                       'pending' => 'Pending',
                       'draft' => 'Draft',
                       'published' => 'Published'
                    ]),
                ]),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image')
                        ->openable()
                        ->downloadable()
                        ->image()
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category.name')->searchable(),
                Tables\Columns\TextColumn::make('users.name')->searchable()->label("Author"),
                Tables\Columns\TextColumn::make('created_at')->sortable(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
