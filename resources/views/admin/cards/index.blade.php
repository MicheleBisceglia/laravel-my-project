@extends('layouts.dashboard')

@section('content')
  <div class="container">
    <h1 class="text-light pt-3 pb-2">Fut revivals Team</h1>
    @foreach ($cards as $card)
      <div class="col-2 text-center">
        <img src="{{ $card->img}}">
          <h3>{{ $card->name }}</h3>
          <p>{{ $card->ruolo }}</p>
          <p>{{ $card->pac }}</p>
          <p>{{ $card->sho }}</p>
          <p>{{ $card->pas }}</p>
          <p>{{ $card->dri }}</p>
          <p>{{ $card->def }}</p>
          <p>{{ $card->phy }}</p>
        </img>
      </div>
    @endforeach
  </div>
@endsection
