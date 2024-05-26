<x-main>
    <div class="container ">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Scegli la tua casa </h1>
                <p class="lead my-3">trova  il posto ideale per  te  e  per  la  tua  famiglia  dove  poter  trascorrere  la tua  vita , noi di casalando abbiamo pensato anche a  questo .</p>
                <p class="lead mb-0">
                    <a href="{{ route('register') }}" class="text-body-emphasis fw-bold">Cosa aspetti iscriviti a soli 99,99$ al mese </a>
                </p>

            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Andria</strong>
                        <h3 class="mb-0">Monticelli</h3>
                        <div class="mb-1 text-body-secondary">Maggio 20 </div>
                        <p class="card-text mb-auto">Appartamento  con 4 vani acessori posto auto... </p>
                        <a href="{{ route('register') }}" class="icon-link gap-1 icon-link-hover stretched-link">
                            Vai ad Annunci
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-responsive" width="200" height="250"
                            src="./template/assets/casa4.jpeg" />

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Matera</strong>
                        <h3 class="mb-0">Baia in montagna</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">
                            Baia  in  montagna  disponibile  da subito  con  ampio...
                        </p>
                        <a href="{{ route('register') }}" class="icon-link gap-1 icon-link-hover stretched-link">
                            Vai ad annunci
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-responsive" width="200" height="250"
                            src="./template/assets/casa1.jpeg" />

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Trani</strong>
                        <h3 class="mb-0">villa</h3>
                        <div class="mb-1 text-body-secondary">1 Ago</div>
                        <p class="card-text mb-auto">Prova una settimana  da  relax  in  questo nuovo.. .</p>
                        <a href="{{ route('register') }}" class="icon-link gap-1 icon-link-hover stretched-link">
                            Vaiad annunci
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-responsive" width="200" height="250"
                            src="./template/assets/casa2.jpeg" />

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Andiria</strong>
                        <h3 class="mb-0">Piazza Catuma</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">non perdere questo  momento  magico ad andria .....</p>
                        <a href="{{ route('register') }}" class="icon-link gap-1 icon-link-hover stretched-link">
                            Vai ad annunci
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-responsive" width="200" height="250"
                            src= "./template/assets/casa3.jpeg"/>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>