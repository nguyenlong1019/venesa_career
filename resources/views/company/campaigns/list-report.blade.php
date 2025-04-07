@extends('company.layouts.app')

@section('content')
<div class="container mt-4">
  <h4>Danh sách chiến dịch tuyển dụng</h4>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên chiến dịch</th>
        <th>Thời gian</th>
        <th>Trạng thái</th>
        <th>Báo cáo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($campaigns as $index => $campaign)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $campaign->name }}</td>
        <td>{{ $campaign->start_time }} → {{ $campaign->end_time }}</td>
        <td>{{ $campaign->status }}</td>
        <td>
          <a href="/company/campaigns/report/{{ $campaign->id }}" class="btn btn-sm btn-info">
            Xem báo cáo
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
