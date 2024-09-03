<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectPageResource\Pages;
use App\Filament\Resources\ProjectPageResource\RelationManagers;
use App\Models\ProjectPage;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectPageResource extends Resource
{
    protected static ?string $model = ProjectPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationLabel = 'Project Page';

    protected static ?string $navigationGroup = 'Pages';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Project Page')->schema([
                        Forms\Components\TextInput::make('name_project')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                        MarkdownEditor::make('decsription_project')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('products'),
                    ])->columns(3),
                    Section::make('Images')->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label('Image')
                            ->directory('projects')
                            ->maxFiles(1)
                            ->reorderable()
                    ]),
                    Section::make('Status')->schema([
                        Toggle::make('is_active')
                            ->required()
                            ->default(true),
                    ])
                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('name_project')
                ->sortable(),
            Tables\Columns\TextColumn::make('decsription_project')
                ->limit(25)
                ->sortable(),
            Tables\Columns\ImageColumn::make('images')
                ->label('Image'),
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
            'index' => Pages\ListProjectPages::route('/'),
            'create' => Pages\CreateProjectPage::route('/create'),
            'edit' => Pages\EditProjectPage::route('/{record}/edit'),
        ];
    }
}
