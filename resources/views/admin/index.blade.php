@extends('layouts.admin')
@section('inside_head_tag')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">대쉬보드</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5>CPU 사용량</h5>
                    <canvas id="cpuChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5>DISK 사용량</h5>
                    <canvas id="diskChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript_just_before_body')
    <script>
        var ctxCpu = document.getElementById('cpuChart').getContext('2d');
        var cpuChart = new Chart(ctxCpu, {
            type: 'line',
            data: {
                labels: ['1 minute', '5 minutes', '15 minutes'],
                datasets: [{
                    label: 'CPU Load',
                    data: @json($cpuLoad),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctxDisk = document.getElementById('diskChart').getContext('2d');
        var diskChart = new Chart(ctxDisk, {
            type: 'pie',
            data: {
                labels: ['Free Disk Space', 'Used Disk Space'],
                datasets: [{
                    label: 'Disk Space in GB',
                    data: [{{ $diskFree / 1073741824 }}, {{ $diskUsed / 1073741824 }}],
                    backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endsection
