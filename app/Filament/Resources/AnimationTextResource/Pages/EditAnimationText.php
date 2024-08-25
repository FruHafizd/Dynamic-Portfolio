<?php

namespace App\Filament\Resources\AnimationTextResource\Pages;

use App\Filament\Resources\AnimationTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnimationText extends EditRecord
{
    protected static string $resource = AnimationTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
