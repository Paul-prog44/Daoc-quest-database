<?php

require_once("header.php");
require("QuestManager.php");

$QuestManager = new QuestManager;
$QuestManager->delete($_GET["id"]);