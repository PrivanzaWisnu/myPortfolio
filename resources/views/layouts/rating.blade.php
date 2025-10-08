<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
        @php
            $rating = $p['rating'] ?? 0;
            $colorClass = $p['color'] ?? 'bg-info';
        @endphp

        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="card card-project h-100 p-3 d-flex flex-column align-items-center justify-content-center text-center">
            @if(!empty($p['image']))
                <img src="{{ $p['image'] }}" class="rounded-2 img-fluid mb-2 pe-none" style="height:75px; object-fit:contain;" alt="{{ $p['title'] }}">
            @endif

            <h6 class="text-white my-2">{{ $p['title'] }}</h6>

          <div class="d-flex justify-content-center gap-2 mt-2" aria-label="Rating {{ $p['title'] }}">
            @for ($r = 1; $r <= 5; $r++)
              <div
                class="rounded-2 {{ $r <= $rating ? $colorClass : 'bg-secondary' }}"
                style="width:14px; height:14px;"
                role="img"
                aria-hidden="{{ $r <= $rating ? 'false' : 'true' }}"
                title="{{ $r <= $rating ? 'Filled' : 'Empty' }}">
              </div>
            @endfor
          </div>
        </div>
</body>
</html>
