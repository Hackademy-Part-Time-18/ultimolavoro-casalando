<x-main>
    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
               <h1>BENVENUTO</h1>
                <p class="col-md-8 fs-4">Qui puoi creare nuovi articoli, clicca sul pulsante in basso per accedere alla
                    sezione dedicata </p>
                <a href="{{route('articles.create')}}">Nuova articolo</a>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Amministra gli Articoli</h2>
                    
                    <a class="btn btn-outline-light" type="button" href="{{ route('articles.store') }}">Vedi Articoli</a>
                </div>
            </div>
           
            </div>
        </div>
    </div>
</x-main>
