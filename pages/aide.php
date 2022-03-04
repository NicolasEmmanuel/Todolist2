    <?php

        //1-Faire sa requete
        $resultQueryaide = $mysqli->query("SELECT * FROM aide ORDER BY id DESC ");

        //2-Tester les resultats
        //3-Si resultat faire boucle
        if ($resultQueryaide->num_rows>1) {

    ?>

<!--4-Sinon informer l'utilisateur-->
<h2> Aucune tache dans la base de donnée</h2>
    
    <?php
        //4-Sinon informer l'utilisateur
        } else {
            
            foreach ($resultQueryaide as $rowAide){
                //echo $rowAide["aide"];
                ?>

                <h3><?php echo $rowAide["id"]; ?></h3>
                
                <?php


            }//fin de "foreach" $resultQueryaide


}//Fin de "if" test $resultQueryaide

?>