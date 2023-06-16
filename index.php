<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Daoc quest database</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logodaoc.png" width="100px" alt="logo daoc database quest"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Quêtes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Realms</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Albion</a></li>
                        <li><a class="dropdown-item" href="#">Midgard</a></li>
                        <li><a class="dropdown-item" href="#">Hibernia</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <?php
        require_once('QuestManager.php');

        $manager = new QuestManager;
        $AllQuests = $manager->getAllQuests();
    ?>

    <main class="m-5 d-flex">
        <?php foreach ($AllQuests as $quest): ?>
                <div class="card m-5 p-2" style="width: 20rem;" >
                    <img src="img/officialdaoc-profile_image-c01c7d16cf7e08cd-300x300.png" class="card-img-top" alt="default daoc logo">
                    <div class="card-body">
                        <h5 class="card-title"><?= $quest->getName(); ?></h5>
                        <p class="card-text">Level : <?= $quest->getminimum_level()." - ".$quest->getmaximum_level() ; ?></p>
                        <a href="#" class="btn btn-primary">See details</a>
                    </div>
                </div>
            
        <?php endforeach ?>
    </main>
    <a href="./create.php" class="btn btn-success m-5">Ajouter une quête</a>
</body>
</html>