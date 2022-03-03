<?php

/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
?>
<!-- Utilisation de bootswatch pour un visuel rapide-->
<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location immo</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="client.php?action=list">Nos clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bien.php?action=list">Nos biens</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="contener">
        <h1 class="rounded border bg-light text-center boder-dark p-2 m-2"><?= $title ?></h1>
        <?= $content ?>
    </div>

    <footer class="bg-dark fixed-bottom">
        <center class="my-2"><strong>WebMaster</strong></center>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>