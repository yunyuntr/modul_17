<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Position;

class EmployeesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $positions = Position::withCount('employees')->get();
        $positionsLabels = $positions->pluck('name')->toArray();
        $employeesCount = $positions->pluck('employees_count')->toArray();

        if (empty($positionsLabels) || empty($employeesCount)) {
            $positionsLabels = ['Tidak Ada Data'];
            $employeesCount = [0];
        }

        return $this->chart->barChart()
            ->setTitle('Posisi')
            ->setSubtitle('Posisi dengan Jumlah Karyawan Terbanyak')
            ->setDataset([
                ['name' => 'Jumlah Karyawan', 'data' => $employeesCount]
            ])
            ->setXAxis($positionsLabels);
    }
}
