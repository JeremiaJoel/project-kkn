<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\RW;
use App\Models\Berita;
use App\Models\Umkm;
use PhpParser\Node\Stmt\Label;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $countRw = RW::count();
        $countUmkm = Umkm::count();
        $countBerita = Berita::count();

        return [
            Stat::make(label: 'Jumlah RW :', value: $countRw),
            Stat::make(label: 'Jumlah UMKM', value: $countUmkm),
            Stat::make(label: 'Jumlah Berita', value: $countBerita),
        ];
    }
}
