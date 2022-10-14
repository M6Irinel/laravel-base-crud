<section class="for-main relative z-full">
    <div class="bg">
        <main class="text-white fw-bold py-4 container">
            <button class="but px-3 py-1">CURRENT SERIES</button>
            <div class="grid-12 my-3 gap-20">
                @foreach ($DC as $comic)
                    <div class="myCard g-col-2">
                        <a class="flex f-column" href="{{ route('comics.show', $comic) }}">
                            <div class="grow">
                                <img class="fluid-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"
                                    title="{{ $comic['type'] }}">
                            </div>
                            <p class="title pt-3 pl-1">{{ $comic['series'] }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="contenitor-but">
                <button class="but2 px-5 py-2">LOAD MORE</button>
            </div>
        </main>
    </div>
</section>
