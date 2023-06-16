<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Ajouter une quête</title>
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
    ?>
    <main class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Quest name :</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="minimum_level" class="form-label">Minimum level : </label>
                <input type="number" class="form-control" id="minimum_level" min=1 max=50>
            </div>
            <div class="mb-3">
                <label for="maximum_level" class="form-label">Maximum level :</label>
                <input type="number" class="form-control" id="maximum_level" min=1 max=50>
            </div>
            <div class="mb-3">
                <label for="number_players" class="form-label">Required number of players :</label>
                <input type="number" class="form-control" id="number_players">
            </div>
            <div class="mb-3">
                <label for="starting_area" class="form-label">Quest area :</label>
                <input type="text" class="form-control" id="starting_area" placeholder="Where can the quest be taken ?">
            </div>
            <div class="mb-3">
                <label for="starting_npc" class="form-label">Which NPC hands out the quest ?</label>
                <input type="text" class="form-control" id="starting_npc">
            </div>
            <div class="mb-3">
                <label for="reward" class="form-label">Reward :</label>
                <input type="text" class="form-control" id="reward" placeholder="Experience, objects ?">
            </div>
            <div class="mb-3">
                <label for="cars" class="form-label">Choose a realm:</label>
                    <select id="realm" name="realm">
                        <option value="Albion" class="form-label">Albion</option>
                        <option value="Midgard">Midgard</option>
                        <option value="Hibernia">Hibernia</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="reward" class="form-label">Image :</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
</body>
</html>