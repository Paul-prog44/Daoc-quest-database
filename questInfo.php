<?php
require_once("header.php");
require_once('QuestManager.php');

$manager = new QuestManager;
$QuestId = $_GET["id"];
$quest = $manager->getByID($QuestId);

var_dump($quest);
?>

<ul class="list-group">
    <li class="list-group-item">Quest Name : <?= $quest["name"] ;?></li>
    <li class="list-group-item">Minimum level :</li>
    <li class="list-group-item">Maximum level :</li>
    <li class="list-group-item">Required number of players :</li>
    <li class="list-group-item">Quest starting area :</li>
    <li class="list-group-item">Quest giving npc :</li>
    <li class="list-group-item">Reward :</li>
</ul>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Final boss</h5>
    <p class="card-text">name of final boss</p>
  </div>
</div>