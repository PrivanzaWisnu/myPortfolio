@extends('layouts.app')

@section('title','Privanza — Experience Showcase')

@section('content')
  <header class="d-flex align-items-center gap-3 mb-4">
    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;background:linear-gradient(135deg,#b700ff,#00f0ff);font-weight:700;">LGBG</div>
    <div class="profile-pic-wrapper">
    {{-- <img style="border-radius: 25%" width="100" height="100" src="{{ asset('img\fotoPorto.jpg') }}" alt=""> --}}
    </div>
    <div>
      <h1 class="neon-title mb-0">LG01 Battlegrounds (In Progress)</h1>
    </div>
  </header>

  {{-- <section class="mb-5">
    <h3 class="mb-3">Screenshots</h3>
    <div class="row g-3">
      @foreach($expsc['screenshots'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif
            <h5 class="text-white mt-2">{{ $p['title'] }}</h5>
            <p class="text-primary small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Open</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="mb-5">
    <h3 class="mb-3">Videos</h3>
    <div class="row g-3">
      @foreach($expsc['videos'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif
            <h5 class="text-white mt-2">{{ $p['title'] }}</h5>
            <p class="text-primary small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Go to Experience</a>@endif
            @if(!empty($p['link2']))<a href="{{ $p['link2'] }}" target="_blank" class="mb-1 btn btn-sm btn-outline-info">Experience Demo</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section> --}}
@endsection
