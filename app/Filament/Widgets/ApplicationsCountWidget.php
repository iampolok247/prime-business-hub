<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ApplicationsCountWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Applications Count', (string) Application::query()->count())
                ->description('Total programme applications')
                ->color('success'),
        ];
    }
}
