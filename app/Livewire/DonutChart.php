<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonutChart extends Component
{
    public $chartData;

    public function mount()
    {
        // Example data, replace with your actual logic to fetch data
        $this->chartData = [
            'labels' => ['Red', 'Blue', 'Yellow'],
            'datasets' => [
                [
                    'data' => [300, 50, 100],
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.donut-chart');
    }
}
