<?php

namespace App\Filament\Resources\PiclabResource\Pages;

use App\Filament\Resources\PiclabResource;
use Filament\Actions;
use  Filament\Actions\CreateAction;

use Filament\Resources\Pages\ListRecords;

class ListPiclabs extends ListRecords
{
    protected static string $resource = PiclabResource::class;

    protected function getHeaderActions(): array
    {
        return [
          // Actions\CreateAction::make(),
            CreateAction::make()->label('Add Student'), 
       //     Action::make()->label('Add Student'), 
        ];
    }
    //public function getTitle(): string 
    //{
    //    return'PIC Students';
  //  }
}