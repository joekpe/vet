<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Patient;

class PatientsChart extends ChartWidget
{
    protected static ?string $heading = 'Patients';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Patients',
                    'data' => [
                        Patient::where('type', 'dog')->count(), 
                        Patient::where('type', 'cat')->count(), 
                        Patient::where('type', 'rabbit')->count()
                    ]
                ]
                
            ],
        
            // These labels appear in the legend and in the tooltips when hovering different arcs
            'labels' => [
                'Dogs',
                'Cats',
                'Rabbits'
            ],

            'backgroundColor' => [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            'hoverOffset' => 4
            
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
