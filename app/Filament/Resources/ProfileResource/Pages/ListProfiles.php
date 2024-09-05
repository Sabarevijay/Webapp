<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListProfiles extends ListRecords
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTableQuery(): ?Builder
    {
        // $query = parent::getTableQuery();
        if (Auth::user()->hasRole('super_admin')) {
            // Admins see all records
            return parent::getTableQuery();
        }
        if (Auth::user()->hasRole('student')) {
            return parent::getTableQuery()->where('user_id', Auth::id());
        }
    }
}
