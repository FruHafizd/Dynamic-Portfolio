<?php

namespace App\Filament\Resources\TitlePagesResource\Pages;

use App\Filament\Resources\TitlePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTitlePages extends EditRecord
{
    protected static string $resource = TitlePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
