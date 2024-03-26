<div wire:ignore>
    <canvas id="donutChart"></canvas>
</div>

@section('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            var ctx = document.getElementById('donutChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: @this.chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });
    </script>
@endsection
