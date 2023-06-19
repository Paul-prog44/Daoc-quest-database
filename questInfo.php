<?php
require_once("header.php");
require_once('QuestManager.php');

$manager = new QuestManager;
//Get quest ID 
$QuestId = $_GET["id"];
$quest = $manager->getByID($QuestId);
?>


<ul class="list-group">
    <li class="list-group-item">Quest Name : <?= $quest->getName()?></li>
    <li class="list-group-item">Minimum level : <?= $quest->getminimum_level() ?></li>
    <li class="list-group-item">Maximum level : <?= $quest->getmaximum_level() ?></li>
    <li class="list-group-item">Required number of players : <?= $quest->getnumber_players() ?></li>
    <li class="list-group-item">Quest starting area : <?= $quest->getstarting_area() ?></li>
    <li class="list-group-item">Quest giving npc : <?= $quest->getstarting_npc() ?></li>
    <li class="list-group-item">Reward : <?= $quest->getReward() ?></li>
</ul>

<div class="card" style="width: 18rem;">
  <img src="./upload/<?= $quest->getImage(); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Final boss</h5>
    <p class="card-text">name of final boss</p>
  </div>
</div>