<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TitlePagesResource\Pages;
use App\Filament\Resources\TitlePagesResource\RelationManagers;
use App\Models\TitlePages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TitlePagesResource extends Resource
{
    protected static ?string $model = TitlePages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Title Page';

    protected static ?string $navigationGroup = 'Navigation';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('about_page_header')
                ->label('About Page Header')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('about_page_above')
                ->label('About Page Above In Skills')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('project_page_header')
                ->label('Project Page Header')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('contact_page_header')
                ->label('Contact Page Header')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about_page_header')
                ->searchable(),
                Tables\Columns\TextColumn::make('about_page_above')
                ->searchable(),
                Tables\Columns\TextColumn::make('project_page_header')
                ->searchable(),
                Tables\Columns\TextColumn::make('contact_page_header')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                \Filament\Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListTitlePages::route('/'),
            'create' => Pages\CreateTitlePages::route('/create'),
            'edit' => Pages\EditTitlePages::route('/{record}/edit'),
        ];
    }
}
