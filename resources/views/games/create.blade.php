<x-app>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Game
        </h2>
        <p class="mb-4">Post a game</p>
    </header>

    <form method="POST" action="{{ env('APP_URL') . '/games' }}">
        @csrf
        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                placeholder="Example: Game"
            />
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="price" class="inline-block text-lg mb-2"
                >Game Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="price"
            />
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="quantity"
                class="inline-block text-lg mb-2"
                >Quantity</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="quantity"
            />
            @error('quantity')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: PC, Strategy, etc"
            />
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
    
     {{--  <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-2">
                Game Image
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="image"
            />
        </div> --}}

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Game Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder="Say something about this game.."
            ></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Create Game
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
</x-app>