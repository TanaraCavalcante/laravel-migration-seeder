@extends("layouts.app")

@section("page-title", "Trains index")

@section("main-content")
    <h1>Trains Informations</h1>
    {{-- "id" => 1
    "azienda" => "Trenitalia"
    "stazione_partenza" => "Roma Termini"
    "stazione_arrivo" => "Milano Centrale"
    "orario_partenza" => "08:30:00"
    "orario_arrivo" => "10:45:00"
    "codice_treno" => "FR123"
    "numero_carrozze" => 8
    "in_orario" => 1
    "cancellato" => 0 --}}

    <section class="container">
        <div class="row">
            @forelse ($trains as $train)
                <div class="col-10">
                    <ul>
                        <li>
                            <p>{{ $train->azienda}}</p>
                            <p>{{ $train->stazione_partenza}}</p>
                        </li>
                    </ul>

                </div>
            @empty
                <div col-12>
                    <h1>No trains are avaliable at the moment...</h1>
                </div>
            @endforelse

        </div>

    </section>
@endsection
