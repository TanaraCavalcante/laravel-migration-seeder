@extends("layouts.app")

@section("page-title", "Trains index")

@section("main-content")

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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione partenza</th>
                    <th scope="col">Stazione arrivo</th>
                    <th scope="col">Orario partenza</th>
                    <th scope="col">Orario arrivo</th>
                    <th scope="col">Codice treno</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($treni as $treno)
                <tr>
                    <th scope="row">{{ $treno->id}}</th>
                    <td >{{ $treno->azienda}}</td>
                    <td>{{ $treno->stazione_partenza}}</td>
                    <td>{{ $treno->stazione_arrivo}}</td>
                    <td>{{ $treno->giorno_partenza}}</td>
                    <td>{{ $treno->orario_partenza}}</td>
                    <td>{{ $treno->giorno_arrivo}}</td>
                    <td>{{ $treno->orario_arrivo}}</td>
                    <td>{{ $treno->codice_treno}}</td>
                </tr>
            @empty
            </tbody>
        </table>
            <h1>No trains are avaliable at the moment...</h1>
            @endforelse
    </section>
@endsection
