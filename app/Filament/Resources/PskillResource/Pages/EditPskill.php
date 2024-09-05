<?php

namespace App\Filament\Resources\PskillResource\Pages;

use App\Filament\Resources\PskillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPskill extends EditRecord
{
    protected static string $resource = PskillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
