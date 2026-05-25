@extends('layouts.store')
@section('content')
@php $first=$banners->first(); @endphp
<section class="hero"><h1>{{ $first->title ?? 'Instant Game Top-Up' }}</h1><p>{{ $first->subtitle ?? 'Buy gaming credits in seconds.' }}</p><a class="btn btn-light" href="{{ $first->button_url ?? '#games' }}">{{ $first->button_text ?? 'Browse Games' }}</a></section>
<div class="section-head" id="games"><div><h2>Popular Games</h2><p class="muted">Choose game and top-up package.</p></div></div><div class="grid">@foreach($games as $game)<a href="{{ route('game.show',$game->slug) }}" class="game-card"><div class="cover3d">{{ strtoupper(substr($game->name,0,1)) }}</div><h3>{{ $game->name }}</h3><p class="muted">{{ $game->description }}</p><span class="btn">Top-up</span></a>@endforeach</div>
@if($videos->count())<div class="section-head"><div><h2>Videos</h2><p class="muted">Guides and offers.</p></div></div><div class="video-grid">@foreach($videos as $video)<div class="card video"><h3>{{ $video->title }}</h3><iframe src="{{ $video->youtube_url }}" allowfullscreen></iframe></div>@endforeach</div>@endif
@endsection
