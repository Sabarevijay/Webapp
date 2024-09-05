<?php

namespace App\Filament\Resources\LeaveResource\Pages;

use App\Filament\Resources\LeaveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListLeaves extends ListRecords
{
    protected static string $resource = LeaveResource::class;

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
