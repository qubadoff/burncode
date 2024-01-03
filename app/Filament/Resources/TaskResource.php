<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskResource\Pages;
use App\Models\Task;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Task";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\Select::make('status')->options([
                    'discussion' => 'Discussion',
                    'ongoing' => 'Ongoing',
                    'done' => 'Done'
                ])->required()->default('discussion'),
                Forms\Components\Card::make([
                    Forms\Components\RichEditor::make('body')->required()->label('Text')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('attachments')
                        ->fileAttachmentsVisibility('private')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name'),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge()->color(fn (string $state): string => match ($state){
                    'discussion' => 'warning',
                    'ongoing' => 'danger',
                    'done' => 'success'
                }),
                Tables\Columns\TextColumn::make('created_at')->label('Created at')
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
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}
