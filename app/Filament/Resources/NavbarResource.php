<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavbarResource\Pages;
use App\Filament\Resources\NavbarResource\RelationManagers;
use App\Models\Navbar;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NavbarResource extends Resource
{
    protected static ?string $model = Navbar::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static ?string $navigationLabel = 'Navigation Bar';

    protected static ?string $navigationGroup = 'Navigation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Project Page')->schema([
                    Forms\Components\TextInput::make('navbar_one')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('navbar_two')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('navbar_there')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('navbar_four')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(255),
                ])->columns(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('navbar_one')
                ->searchable(),
                Tables\Columns\TextColumn::make('navbar_two')
                ->searchable(),
                Tables\Columns\TextColumn::make('navbar_there')
                ->searchable(),
                Tables\Columns\TextColumn::make('navbar_four')
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
            'index' => Pages\ListNavbars::route('/'),
            'create' => Pages\CreateNavbar::route('/create'),
            'edit' => Pages\EditNavbar::route('/{record}/edit'),
        ];
    }
}
