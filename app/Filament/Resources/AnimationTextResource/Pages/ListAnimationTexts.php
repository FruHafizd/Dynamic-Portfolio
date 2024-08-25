<?php

namespace App\Filament\Resources\AnimationTextResource\Pages;

use App\Filament\Resources\AnimationTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnimationTexts extends ListRecords
{
    protected static string $resource = AnimationTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
