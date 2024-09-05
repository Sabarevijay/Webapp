<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('CGPA', '8.54')
            ->description('Increase in grade')
            ->descriptionIcon('heroicon-s-pencil-square')
            ->color('success')
            ->chart([7,6,5,4,4,8,1,10]),
            Stat::make('Attendance', '21%'),
            Stat::make('Standing-Arrear', '1'),
            Stat::make('Discipline(Warning)','1'),
            Stat::make('P-Skills-Level','3'),
        ];
    }
}
