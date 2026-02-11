@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto px-4 py-4 space-y-4">

    {{-- HEADER --}}
    <h1 class="text-lg font-semibold">
        Halo Pak/Bu Fatimah
    </h1>

    {{-- CAROUSEL --}}
    <div class="relative overflow-hidden rounded-xl bg-blue-100 p-4">

        <div id="carouselTrack" class="flex transition-transform duration-500">
            @foreach($moduls->take(4) as $m)
                <div class="min-w-full">
                    <h2 class="font-semibold text-blue-900">
                        {{ $m->title }}
                    </h2>
                </div>
            @endforeach
        </div>

    </div>

    {{-- CATEGORY --}}
    <div class="flex gap-2 justify-between text-sm">
        @foreach(['PPG','PKL','SelfDev','AddTrain'] as $cat)
            <a href="?category={{ $cat }}"
               class="px-3 py-2 rounded-lg bg-gray-100 {{ request('category')==$cat?'bg-blue-200':'' }}">
                {{ $cat }}
            </a>
        @endforeach
    </div>

    {{-- SEARCH --}}
    <form>
        <input name="search"
            value="{{ request('search') }}"
            placeholder="Cari materi..."
            class="w-full border rounded-lg px-3 py-2 text-sm">
    </form>

    {{-- LIST MODUL --}}
    <div class="space-y-4 pt-2">
        @foreach($moduls as $modul)
            @include('fe.partials.modul-card')
        @endforeach
    </div>

</div>

{{-- CAROUSEL SCRIPT (A→B→C→D→C→B→A) --}}
<script>
let index = 0;
let dir = 1;
const total = 4;
const track = document.getElementById('carouselTrack');

setInterval(() => {

    if(index === total - 1) dir = -1;
    if(index === 0) dir = 1;

    index += dir;

    track.style.transform = `translateX(-${index * 100}%)`;

}, 3500);
</script>

@endsection
