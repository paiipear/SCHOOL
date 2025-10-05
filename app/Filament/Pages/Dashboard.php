<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StudentStatsWidget;
use App\Filament\Widgets\TopStudents;

class Dashboard extends BaseDashboard
{
    
    public function getWidgets(): array
    {
        return [
                StudentStatsWidget::class,  
                TopStudents::class,
        ];
    }
}
