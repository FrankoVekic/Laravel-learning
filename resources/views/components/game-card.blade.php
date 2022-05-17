@props(['game'])
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('images/no-image.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="game/{{$game->id}}">{{ $game->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $game->price }}</div>
            <x-game-tags :tagsCsv="$game->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$game->description}}
            </div>
        </div>
    </div>
</x-card>