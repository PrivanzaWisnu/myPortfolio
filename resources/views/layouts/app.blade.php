<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Privanza — Portfolio')</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- optional: small custom CSS -->
  <style>
    body { background: linear-gradient(180deg,#0b0f15,#07101a); color:#e6f7ff; }
    .card-project { background: rgba(255,255,255,0.02); border:1px solid rgba(255,255,255,0.03); border-radius:12px; }
    .neon-title { text-shadow: 0 0 8px rgba(0,240,255,0.12); }
  </style>
  @stack('head')
</head>
<body>
  <nav class="navbar navbar-dark bg-transparent py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Privanza</a>
      <div>
        <a class="btn btn-outline-light btn-sm" href="#">Contact</a>
      </div>
    </div>
  </nav>

  <main class="container py-4">
    @yield('content')
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
