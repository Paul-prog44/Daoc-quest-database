<?php
        require_once('header.php');
        require_once('QuestManager.php');

        $QuestManager = new QuestManager;

        $error= NULL;

        if($_POST) {
            $name=$_POST["name"];
            $minimum_level=$_POST["minimum_level"];
            $maximum_level=$_POST["maximum_level"];
            $number_players=$_POST["number_players"];
            $starting_area=$_POST["starting_area"];
            $starting_npc=$_POST["starting_npc"];
            $reward=$_POST["reward"];
            $realm=$_POST["realm"];
            $userId=1;
        
                try {
                    //Check size size
                    if ($_FILES["image"]['size'] < 2000000 ) {
    
                        
                        $fileName = $_FILES["image"]["name"];
                        //If !exist upload folder, create it
                        if (!is_dir("upload/")) {
                            mkdir("upload/");
                        }
                        $targetFile = "upload/{$fileName}";
                        $fileExtension = pathinfo($targetFile, PATHINFO_EXTENSION);
        
                        //Check file type
                        $acceptedExtensions = ["png", "jpg", "jpeg", "webp"];
                        if (in_array(strtolower($fileExtension), $acceptedExtensions)) {
                            //Attempt to move file to upload folder
                            if(move_uploaded_file( $_FILES["image"]["tmp_name"], $targetFile)) {
                                $imageName=$fileName;
                                $QuestManager->create([$name, $minimum_level, $maximum_level, $number_players, $starting_area, $starting_npc, $reward, $realm, $userId, $imageName]);
                                echo "<p class='alert alert-success'>La quête a bien été ajoutée</p>";
                            } else {
                                throw new Exception("Une erreur est survenue.");
                            }
                        } else {
                            throw new Exception("Le format du fichier n'est pas valide, formats pris en charge : png, jpg, jpeg et webp");
                        }
                    } else {
                        throw new Exception("Le fichier ne peut excéder 2 MO.");
                    }
    
                } catch (Exception $e) {
                    $error = $e->getMessage();
                }
            
        }
        
    ?>

    <main class="container">

        <?php
        if ($error) {
            echo "<p class='alert alert-danger'>$error</p>";
        } 
        ?>

        <form method="POST" enctype="multipart/form-data">
            
                <label for="name" class="form-label">Quest name :</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
            
            
                <label for="minimum_level" class="form-label">Minimum level : </label>
                <input type="number" class="form-control" id="minimum_level" min=1 max=50 name="minimum_level">
            
            
                <label for="maximum_level" class="form-label">Maximum level :</label>
                <input type="number" class="form-control" id="maximum_level" min=1 max=50 name="maximum_level">

                <label for="number_players" class="form-label">Required number of players :</label>
                <input type="number" class="form-control" id="number_players" name="number_players">

                <label for="starting_area" class="form-label">Quest area :</label>
                <input type="text" class="form-control" id="starting_area" name="starting_area" placeholder="Where can the quest be taken ?">

                <label for="starting_npc" class="form-label">Which NPC hands out the quest ?</label>
                <input type="text" class="form-control" id="starting_npc" name="starting_npc">

                <label for="reward" class="form-label">Reward :</label>
                <input type="text" class="form-control" id="reward" name="reward" placeholder="Experience, objects ?">

                <label for="realm" class="form-label">Realm :</label>
                <select class="form-select" aria-label="Default select example" name="realm">
                    <option selected>Select a realm</option>
                    <option value="Albion">Albion</option>
                    <option value="Midgard">Midgard</option>
                    <option value="Hibernia">Hibernia</option>
                </select>
                
                <label for="reward" class="form-label">Image :</label>
                <input type="file" name="image" id="image" name="image" class="form-control">
            
                <button type="submit" class="btn btn-primary">Créer</button>
            
        </form>
    </main>
</body>
</html>