<main>
    <div id="jumbotron"></div>

    <section class="container-80">
        {{-- @php
            dump($comicsArray);
        @endphp --}}
        <div class="container-cards">
            {{-- comic single-card  --}}
            @foreach ($comicsArray as $item)
                <div class="card">
                    <img src="{{ $item["thumb"] }}" alt="{{ $item["title"] }}">
                    <h5>{{ $item["title"] }}</h5>
                    {{-- prova con artist (3 livello)  --}}
                    <h2>
                        {{ $item["artists"][0]}}
                    </h2>
                </div>
            @endforeach
        </div>

    </section>

</main>