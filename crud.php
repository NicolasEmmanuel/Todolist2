<?php
    include ("config.php");

    if(isset($_GET["action"])){
        switch ($_GET["action"]) {
            
            case "ajouter":
                //echo "i = 0";
                
                $MaRequete="INSERT INTO `tasks` (`id`, `tache`,`etat`) VALUES (NULL, '".$_POST["tache"]."','n')";
                echo $MaRequete;
                break;
            
                    case "modifier":
                        $MaRequete="UPDATE `tasks` SET `etat` = 'o' WHERE `tasks`.`id` =".$_GET["id"];
                    echo "tache modifier";
                    break;
            
                        case "supprimer":
                        $MaRequete ="delete from tasks where id=".$_GET["id"];
                        break;


    if ($mysqli->query($MaRequete)){
    //Le header fait une redirection vers l'index.
        header('Location: /');
    
                            
                        
                


    }
}
    }else{
        //redirection par défaut
        header('Location: /');
    }
        
        

   


?>