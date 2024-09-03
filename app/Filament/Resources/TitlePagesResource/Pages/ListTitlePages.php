<?php

namespace App\Filament\Resources\TitlePagesResource\Pages;

use App\Filament\Resources\TitlePagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTitlePages extends ListRecords
{
    protected static string $resource = TitlePagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
