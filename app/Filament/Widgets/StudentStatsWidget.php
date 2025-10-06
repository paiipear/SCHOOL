<?php

namespace App\Filament\Widgets;

use App\Models\Grade;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
class StudentStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $lulusCount = Grade::where('result', 'Lulus')->count();
        $tidakLulusCount = Grade::where('result', 'Tidak Lulus')->count();

        return [
            Stat::make(' ', $lulusCount)
                ->description('Total siswa yang sudah lulus')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success')
                ->chart([$lulusCount]),

            Stat::make(' ', $tidakLulusCount)
                ->description('Total siswa yang gagal')
                ->descriptionIcon('heroicon-o-x-circle')
                ->color('danger')
                ->chart([$tidakLulusCount]),

           
        ];
    }
}

