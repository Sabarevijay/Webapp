<?php

namespace App\Filament\Resources\PiclabResource\Pages;

use App\Filament\Resources\PiclabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPiclab extends EditRecord
{
    protected static string $resource = PiclabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
