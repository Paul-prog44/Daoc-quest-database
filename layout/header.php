<?php 

//Identify page to update title
$currentPage = "";
if (str_contains($_SERVER['REQUEST_URI'], "index")) {
    $currentPage = "Daoc Quest Database";
} else if (str_contains($_SERVER['REQUEST_URI'], "create")) {
    $currentPage = "Add a quest";
} else if (str_contains($_SERVER['REQUEST_URI'], "albion")) {
    $currentPage = "Albion Quests";
}  else if (str_contains($_SERVER['REQUEST_URI'], "midgard")) {
    $currentPage = "Midgard Quests";
}  else if (str_contains($_SERVER['REQUEST_URI'], "hibernia")) {
    $currentPage = "Hibernia Quests";
} else if (str_contains($_SERVER['REQUEST_URI'], "allQuests")) {
    $currentPage = "All Quests";
} else if (str_contains($_SERVER['REQUEST_URI'], "update")) {
    $currentPage = "Update a quest";
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title><?= $currentPage ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logodaoc.png" width="100px" alt="logo daoc database quest"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Add a quest</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Realms</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="albionQuests.php">Albion</a></li>
                        <li><a class="dropdown-item" href="midgardQuests.php">Midgard</a></li>
                        <li><a class="dropdown-item" href="hiberniaQuests.php">Hibernia</a></li>
                        <li><a class="dropdown-item" href="allQuests.php">All realms</a></li>

                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" method="GET" action="searchQuest.php">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="questName">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
