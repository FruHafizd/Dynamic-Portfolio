<?php

namespace App\Filament\Resources\ProjectPageResource\Pages;

use App\Filament\Resources\ProjectPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectPage extends EditRecord
{
    protected static string $resource = ProjectPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
