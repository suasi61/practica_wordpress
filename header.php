<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>


    <title>Blog</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-around">
                <div>
                    <button class="border border-0">
                        <img src="img/Union.png" alt="">
                    </button>
                    <a class="navbar-brand" href="#">Meta<strong>Blog</strong></a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link"  href="#">Home</a>
                    <a class="nav-link" href="home.php">Blog</a>
                    <a class="nav-link active" aria-current="page" href="single.php">Single</a>
                    <a class="nav-link" href="contact.php">Contacto</a>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <form class="d-flex" role="search">
                            <div class="search-input position-relative">
                                <input type="search" class="form-control form-control-lg" placeholder="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute top-50 end-0 translate-middle-y search-icon" width="25" height="25" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </form>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input px-4 py-3" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    </div>
                </div>
            </div>
        </nav>
    </header>