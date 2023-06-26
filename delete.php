<?php

require_once("layout/header.php");
require("QuestManager.php");

$QuestManager = new QuestManager;

//Delete quest by id
$QuestManager->delete($_GET["id"]);

//Fonction de redirection vers index.php
header("Location: index.php");