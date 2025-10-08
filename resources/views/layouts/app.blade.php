<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Privanza — Portfolio')</title>
  <link rel="icon" href="{{ asset('img/fotoPorto.jpg') }}" type="image/x-icon">

  <!-- Bootstrap CDN -->
  @include('layouts.styling')
  <!-- optional: small custom CSS -->
  <style>
    body { background: linear-gradient(180deg,#0b0f15,#07101a); color:#e6f7ff; }
    .card-project { background: rgba(255,255,255,0.02); border:1px solid rgba(255,255,255,0.03); border-radius:12px; }
    .neon-title { text-shadow: 0 0 8px rgba(0, 238, 255, 0.384); }
  </style>
  @stack('head')
</head>
<body style="padding-top:76px;">
  <nav class="navbar navbar-dark bg-transparent py-3 border-secondary border-bottom fixed-top shadow" style="padding-top:0.35rem; padding-bottom:0.35rem; z-index:9999;backdrop-filter:blur(10px)">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold mx-2" href="/home">Home</a>
      <div>
        <a class="mx-3 btn btn-outline-secondary btn-sm" href="https://www.linkedin.com/in/privanza-wisnu-b38267386" target="_blank">
        <img width="30" height="30" src="{{asset('img/logo-linkedin.png')}}" alt="">
        </a>
        <a class="mx-3 btn btn-outline-secondary btn-sm" href="https://github.com/PrivanzaWisnu" target="_blank">
        <img width="30" height="30" src="{{asset('img/githubLogo.png')}}" alt="">
        </a>
        {{-- <a class="mx-4 btn btn-outline-light btn-sm" href="#">See CV</a>
        <a class="mx-3 btn btn-outline-light btn-sm" href="#">Contact</a> --}}
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
