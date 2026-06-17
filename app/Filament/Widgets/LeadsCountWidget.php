<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LeadsCountWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Leads Count', (string) Consultation::query()->count())
                ->description('Total consultation leads')
                ->color('primary'),
        ];
    }
}
