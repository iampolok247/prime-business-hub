<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MonthlyEnquiriesWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $count = Consultation::query()->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->count();

        return [
            Stat::make('Monthly Enquiries', (string) $count)
                ->description('Current month')
                ->color('warning'),
        ];
    }
}
