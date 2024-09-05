<?php

namespace App\Filament\Resources\AcademicsResource\Pages;

use App\Filament\Resources\AcademicsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademics extends EditRecord
{
    protected static string $resource = AcademicsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
