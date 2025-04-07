<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Venesa Career</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Font (tùy chọn) -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Custom CSS (nếu có) -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .sidenav .nav-link.active {
      background-color: #e9ecef;
      font-weight: 500;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100 relative">
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-header">
      <h2>Venesa Career</h2>
    </div>
    <ul class="sidebar-menu">
      <li><a href="/candidate">Profile</a></li>
      <li><a href="/">Jobs</a></li>
      <li class="active"><a href="/candidate/cv-list">CV</a></li>
      <li><a href="/company/logout">Logout</a></li>
    </ul>
  </aside>
  <style>
    .sidebar {
      width: 220px;
      height: 100vh;
      background-color: #222;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px 15px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
    }

    .sidebar-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar-header h2 {
      margin: 0;
      font-size: 20px;
    }

    .sidebar-menu {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar-menu li {
      margin: 10px 0;
    }

    .sidebar-menu li a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 8px 12px;
      border-radius: 4px;
    }

    .sidebar-menu li.active a,
    .sidebar-menu li a:hover {
      background-color: #444;
    }

    .logout-form {
      margin-top: 30px;
    }

    .logout-form button {
      width: 100%;
      padding: 10px;
      background-color: #ff4d4d;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .logout-form button:hover {
      background-color: #e60000;
    }
  </style>
  <main class="main-content position-relative bg-gray-100 max-height-vh-100 h-100" style="width: calc(100%-250px);margin-left: 250px;">
    <div style="margin-top: 24px;">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Công việc</th>
      <th scope="col">Thời điểm nộp</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    @forelse($candidates as $index => $candidate)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $candidate->application->job->name ?? '---' }}</td>
        <td>{{ $candidate->created_at->format('d/m/Y H:i') }}</td>
        <td>{{ $candidate->status }}</td>
        <td>
          <a href="{{ $candidate->cv_path }}" target="_blank" class="btn btn-sm btn-primary">Xem CV</a>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="5" class="text-center">Bạn chưa ứng tuyển công việc nào.</td>
      </tr>
    @endforelse
  </tbody>
</table>

    </div>
  </main>
  @include('company.includes.script')

</body>

</html>