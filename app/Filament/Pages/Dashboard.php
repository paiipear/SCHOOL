<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StudentStatsWidget;

class Dashboard extends BaseDashboard
{
    
    public function getWidgets(): array
    {
        return [
            StudentStatsWidget::class,   // ini nampilin jumlah lulus/tidak lulus
        ];
    }
}
