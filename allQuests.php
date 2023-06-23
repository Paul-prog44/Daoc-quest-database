<?php
        require_once('layout/header.php');
        require_once('QuestManager.php');

        $manager = new QuestManager;
        $AllQuests = $manager->getAllQuests();
    ?>
    
    <main class="m-5 d-flex flex-wrap">
        <?php foreach ($AllQuests as $quest): ?>
                <div class="card m-5 p-2" style="width: 20rem;" >
                    <img src="upload/<?= $quest->getImage();?>" class="card-img-top" alt="default daoc logo">
                    <div class="card-body">
                        <h5 class="card-title"><?= $quest->getName(); ?></h5>
                        <p class="card-text">Level : <?= $quest->getminimum_level()." - ".$quest->getmaximum_level() ; ?></p>
                        <a href="./questInfo.php?id=<?= $quest->getQuest_iD()?>" class="btn btn-primary">See details</a>
                        <a href="./delete.php?id=<?= $quest->getQuest_iD()?>" class="btn btn-danger">Delete</a>
                        
                    </div>
                </div>
            
        <?php endforeach ?>
    </main>
    <a href="./create.php" class="btn btn-success m-5">Add a quest</a>
    <?php require_once("layout/footer.php");?>