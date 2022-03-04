    <h2 class="mt-5">Acceuil</h2>

    <?php
        /* Sélection de toutes les lignes de la table task  */
        $resultQuerytasks = $mysqli->query("SELECT * FROM tasks ORDER BY id DESC ");
        //printf("Nombre de lignes affectées (SELECT): %d\n", $mysqli->affected_rows);

    ?>

<ul class="list-group">
    <?php
        foreach($resultQuerytasks as $rowtasks){
    ?>
    
    <?php 
    /* Insertion d'une ligne */ 
        $mysqli->query("CREATE TABLE Language SELECT * from tasks BY id");
        printf("Nombre de lignes affectées (INSERT): %d\n", $mysqli->affected_rows);
    
    ?>
    

            <li  class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <small class="opacity-50 text-nowrap"></small>
                
                <div
                 
                class="d-flex gap-2 w-100 justify-content-between">
                    
                <div>
                        <h6 class="mb-0"><?php echo $rowtasks["id"];?> - <?php echo $rowtasks["tache"]; ?></h6>
                        <p class="mb-0 opacity-75"><?php echo $rowtasks["dateins"]; ?></p>
                </div>
                    </div>
                    <?php if ($rowtasks["etat"] == "n" ) { 
                        $linkRealise= $dir_ws."crud.php?action=realiser&id=".$rowtasks["id"];
                        ?>
                        
                    
                    <a href="<?php echo $linkRealise;?>" type="button" class="btn btn-outline-success">Réaliser</a>

                    <?php } ?>

                    <?php if ($rowtasks["etat"] == "o" ) { 
                        $linkSupprimer= $dir_ws."crud.php?action=supprimer&id=".$rowtasks["id"]; 
                        ?>

                    <a href="<?php echo $linkSupprimer;?>" type="button" class="btn btn-outline-danger">Supprimer</a>
                    
                    <?php } ?>
            </li>

    <?php
        }
    ?>
  
</ul>