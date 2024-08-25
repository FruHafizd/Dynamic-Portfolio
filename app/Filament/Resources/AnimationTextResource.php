<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnimationTextResource\Pages;
use App\Filament\Resources\AnimationTextResource\RelationManagers;
use App\Models\AnimationText;
use Filament\Forms;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnimationTextResource extends Resource
{
    protected static ?string $model = AnimationText::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('text_animation')
                    ->required()
                    ->maxLength(255),
                Toggle::make('is_active')
                        ->required()
                        ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text_animation')
                ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
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
            'index' => Pages\ListAnimationTexts::route('/'),
            'create' => Pages\CreateAnimationText::route('/create'),
            'edit' => Pages\EditAnimationText::route('/{record}/edit'),
        ];
    }
}
