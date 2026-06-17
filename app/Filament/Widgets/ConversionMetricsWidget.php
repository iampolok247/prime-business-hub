<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Consultation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ConversionMetricsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $leads = max(Consultation::query()->count(), 1);
        $applications = Application::query()->count();
        $conversionRate = number_format(($applications / $leads) * 100, 1);

        return [
            Stat::make('Conversion Metrics', "{$conversionRate}%")
                ->description('Lead to application conversion')
                ->color('success'),
        ];
    }
}
