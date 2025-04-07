@extends('company.layouts.app')

@section('content')

<h3>Báo cáo chiến dịch: {{ $campaign->name }}</h3>

<ul>
  <li>Tổng số công việc: <strong>{{ $totalJobs }}</strong></li>
  <li>Tổng số lượt ứng tuyển: <strong>{{ $totalApplications }}</strong></li>
  <li>Ứng viên đã phỏng vấn: <strong>{{ $interviewedCount }}</strong></li>
  <li>Ứng viên trúng tuyển: <strong>{{ $selectedCount }}</strong></li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<h4 class="mt-4">Biểu đồ trạng thái ứng viên</h4>
<canvas id="statusChart" width="400" height="200"></canvas>

<script>
  const ctx = document.getElementById('statusChart').getContext('2d');

  const data = {
    labels: {!! json_encode($applicationStatuses->keys()) !!},
    datasets: [{
      label: 'Số lượng ứng viên',
      data: {!! json_encode($applicationStatuses->values()) !!},
      backgroundColor: [
        '#007bff', '#28a745', '#ffc107', '#dc3545', '#17a2b8'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  new Chart(ctx, config);
</script>


@endsection