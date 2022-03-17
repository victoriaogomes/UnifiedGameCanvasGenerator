<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale-1.0"/>
        <title>UGC Generator</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sharedLayouts/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('sharedLayouts.navbar')
        <main>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">Gerador de Unified Game Canvas</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        O Unified Game Canvas (UGC) combina características comuns de um Game Design Canvas (GDC)
                        com a perspectiva do 5W2H, o que promove um aumento nas possibilidades de design para 
                        a criação do GDC do jogo que se deseja desenvolver.
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                        <button type="button" class="btn btn-primary primary-btn btn-lg px-4 me-sm-3">Login</button>
                        <button type="button" class="btn btn-primary standard-btn btn-lg px-4">Cadastre-se</button>
                    </div>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                        <img src="{{ asset('images/siteUGCGenerator.png') }}" class="img-fluid border rounded-3 shadow-lg mb-4" width="700" height="500" loading="lazy">
                    </div>
                </div>
            </div>
        </main>
        @include('sharedLayouts.footer')
    </body>
</html>
