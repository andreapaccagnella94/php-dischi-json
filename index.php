<?php

require_once "./functions.php";
// var_dump($dischi);
// $album1 = $dischi[0];
// var_dump($album1["coverUrl"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <body class="bg-light">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm py-2">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <!-- <img src="https://via.placeholder.com/40?text=LOGO"
                            alt="Logo"
                            width="40"
                            height="40"
                            class="d-inline-block align-text-top me-2"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-music d-inline-block align-text-top me-2 text-light" viewBox="0 0 16 16"
                            alt="Logo"
                            width="40"
                            height="40">
                            <path d="M10.304 3.13a1 1 0 0 1 1.196.98v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13s-.974-.134-1.338-.377C5.302 12.383 5 11.995 5 11.5s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98z" />
                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                        </svg>
                        <span class="h5 mb-0 text-light">Music Albums</span>
                    </a>
                </div>
            </nav>
        </header>


        <main>
            <div class="container my-5">

                <h1 class="mb-4 text-center">I nostri album</h1>

                <div class="row g-4">

                    <!-- ----- CARDs ----- -->
                    <?php
                    foreach ($dischi as $album) {
                    ?>

                        <div class="col-12 col-md-4">
                            <div class="card h-100 shadow-sm">
                                <img src=<?php echo $album["coverUrl"] ?>
                                    class="card-img-top"
                                    alt="Cover Album <?php echo $album["id"] ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title mb-1"><?php echo $album["title"] ?></h5>
                                    <p class="card-text mb-2 text-muted"><?php echo $album["artist"] ?></p>
                                    <ul class="list-unstyled mb-3 flex-grow-1">
                                        <li><strong>Anno:</strong> <?php echo $album["year"] ?></li>
                                        <li><strong>Genere:</strong> <?php echo $album["genre"] ?></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary mt-auto">Dettagli</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    ?>


                </div>
            </div>
        </main>

    </body>

</html>