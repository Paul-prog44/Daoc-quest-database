<?php
    require_once('layout/header.php');
    require_once('QuestManager.php');

    $manager = new QuestManager;
    $AllQuests = $manager->getAllQuests();
?>
<div>
    <div class=" banners d-flex justify-content-evenly align-items-center">
        <div class="banner">
            <a href="midgardQuests.php"><img src="img/1192614-midgard_banner.jpg"></a>
        </div>
        <div class="banner">
            <a href="albionQuests.php"><img src="img/1192613-albion_banner.jpg"></a>
        </div>
        <div class="banner">
            <a href="hiberniaQuests.php"><img src="img/1192609-hibernia_banner.jpg"></a>
        </div>
    </div>
</div>
<?php
    require_once('layout/footer.php');
?>

