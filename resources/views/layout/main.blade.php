<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casalando</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column h-100">
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 ">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                        <img height="48px" src="./template/assets/logo3.png">
                    </a>
                </div>
           <x-navbar />
            </div>
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            
        </div>
    </div>
    <main>
{{$slot}}

    </main>
    <footer class="footer py-5 mt-auto text-center text-body-secondary bg-body-tertiary">
        <p>Copyright</p>
    </footer>
</body>
</html>