@extends('layouts.app')

@section('title','Privanza — Portfolio')

@section('content')
  <header class="d-flex align-items-center gap-3">
    {{-- <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;background:linear-gradient(135deg,#b700ff,#00f0ff);font-weight:700;">PW</div> --}}
    <div class="profile-pic-wrapper mb-5">
    <img style="pointer-events: none;border-radius: 25%" width="100" height="100" src="{{ asset('img/fotoPorto.jpg') }}" alt="">
    </div>
    <div class="mb-5">
      <h1 class="neon-title">Vanza</h1>
      <p style="color: #386669" class="mb-0">Hi, I’m a Computer Science student at BINUS University, graduating in 2027. I enjoy building web applications with Laravel, experimenting with database queries, and exploring UI/UX design to make apps both powerful and user-friendly. I'm also interested in learning how to make data into useful insights. I love turning ideas into working projects and I’m always curious about how to improve both the logic behind the system and the experience in front of the screen. I would like to learn new things to develop my skills.</p>
    </div>
  </header>

  <section class="my-5">
    <h3 class="my-5 text-center">--Tech Stack & Skills--</h3>
    <div class="my-5 row g-3 justify-content-center">
        <h5 class="text-center text-white mt-2 mb-3">Programming Languages</h5>

        <div class="row g-3 justify-content-center">
            @foreach($projects['pl'] ?? [] as $p)

            @include('layouts.rating')
        </div>
            @endforeach
    </div>

    <div class="my-5 row g-3 justify-content-center">
        <h5 class="text-center text-white mt-2 mb-3">Framework & Libraries</h5>

        <div class="row g-3 justify-content-center">
            @foreach($projects['f&l'] ?? [] as $p)

            @include('layouts.rating')
        </div>
            @endforeach
    </div>

    <div class="my-5 row g-3 justify-content-center">
        <h5 class="text-center text-white mt-2 mb-3">Tools</h5>

        <div class="row g-3 justify-content-center">
            @foreach($projects['tools'] ?? [] as $p)

            @include('layouts.rating')
        </div>
            @endforeach
    </div>

    <div class="my-5 row g-3 justify-content-center">
        <h5 class="text-center text-white mt-2 mb-3">Languages</h5>

        <div class="row g-3 justify-content-center">
            @foreach($projects['lang'] ?? [] as $p)

            @include('layouts.rating')
        </div>
            @endforeach
    </div>

  </section>

<hr class="section-divider">

  <section class="my-5">
    <h3 class="my-5 text-center">💻 Coding Projects</h3>
    <div class="row g-3 justify-content-center">
      @foreach($projects['coding'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            <h5 class="text-white mt-2">{{ $p['title'] }}</h5>
            <p class="text-primary small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Open</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

<hr class="section-divider">

  <section class="my-5">
    <h3 class="my-5 text-center">📄 Certifications & Publications</h3>
    <div class="row g-3 justify-content-center">
      @foreach($projects['c&p'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            <h5 class="text-white mt-2">{{ $p['title'] }}</h5>
            @if(!empty($p['image']))
              <img style="filter: blur(1px)" src="{{ $p['image'] }}" class="img-fluid rounded pe-none" alt="{{ $p['title'] }}">
            @endif
            <p class="text-primary small mt-3">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Open Document</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

<hr class="section-divider">

<section class="my-5">
    <h3 class="my-5 text-center">🎮 Roblox Map</h3>
    <div class="row g-3 justify-content-center">
      @foreach($projects['roblox'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            {{-- @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif --}}
            <h5 class="text-white mt-2">{{ $p['title'] }}</h5>
            <p class="text-primary small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Go to Experience</a>@endif
            @if(!empty($p['link2']))<a href="{{ $p['link2'] }}" target="_blank" class="mt-2 mb-1 btn btn-sm btn-outline-info">Experience Showcase</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

@endsection
