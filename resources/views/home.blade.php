@extends('layouts.app')

@section('title','Privanza — Code & Maps')

@section('content')
  <header class="d-flex align-items-center gap-3 mb-4">
    <div class="rounded-3 d-flex align-items-center justify-content-center" style="width:72px;height:72px;background:linear-gradient(135deg,#ff3bd1,#00f0ff);font-weight:700;">PW</div>
    <div>
      <h1 class="h4 neon-title mb-0">Privanza — code & maps</h1>
      <p class="text-muted mb-0">Neon portfolio · coding projects + Roblox maps</p>
    </div>
  </header>

  <section class="mb-5">
    <h3 class="mb-3">💻 Coding Projects</h3>
    <div class="row g-3">
      @foreach($projects['coding'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif
            <h5 class="mt-2">{{ $p['title'] }}</h5>
            <p class="text-muted small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="btn btn-sm btn-outline-info">Open</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="mb-5">
    <h3 class="mb-3">🎮 Roblox Maps</h3>
    <div class="row g-3">
      @foreach($projects['roblox'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif
            <h5 class="mt-2">{{ $p['title'] }}</h5>
            <p class="text-muted small">{{ $p['desc'] }}</p>
            @if(!empty($p['link']))<a href="{{ $p['link'] }}" target="_blank" class="btn btn-sm btn-outline-info">Play</a>@endif
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section>
    <h3 class="mb-3">😜 Fun / Side Projects</h3>
    <div class="row g-3">
      @foreach($projects['fun'] ?? [] as $p)
        <div class="col-md-4">
          <div class="card card-project h-100 p-3">
            @if(!empty($p['image']))
              <img src="{{ $p['image'] }}" class="img-fluid rounded" alt="{{ $p['title'] }}">
            @endif
            <h5 class="mt-2">{{ $p['title'] }}</h5>
            <p class="text-muted small">{{ $p['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
