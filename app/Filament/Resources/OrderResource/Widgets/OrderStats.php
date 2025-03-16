<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\ChartWidget;

class OrderStats extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
