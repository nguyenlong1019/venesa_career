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
  @include('candidate.includes.sidebar')
  <main class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid py-4">
      @yield('content')
    </div>
  </main>
  @include('company.includes.script')

</body>

</html>