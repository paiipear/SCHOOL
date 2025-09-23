<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StudentsTableWidget;

class Dashboard extends BaseDashboard
{
    
    public function getWidgets(): array
    {
        return [
            StudentsTableWidget::class,
        ];
    }
}
