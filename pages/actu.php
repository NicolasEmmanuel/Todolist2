<h2 class="mt-5">Actu</h2>

<?php
      
        $resultQuerytasks = $mysqli->query("SELECT * FROM actu ORDER BY id DESC ");

        foreach($resultQueryactu as $rowactu){
        }

            $mysqli->query("CREATE TABLE Language SELECT * from actu BY id");
            printf("Nombre de lignes affectées (INSERT): %d\n", $mysqli->affected_rows);

            $content = file_get_contents("https://www.lemonde.fr/jeux-video/rss_full.xml");
            $monRss = new SimpleXMLElement($content);
            
            //var_dump($monRss);
            foreach($monRss->channel->item as $entry){
            
                //echo $entry->title;
                echo $entry->description;
                $mysqli->query("INSERT INTO `actu` (`id`, `Title`, `Description`, `dateins`) VALUES (NULL,'".$entry->title."' '', '".$entry->description."', CURRENT_TIMESTAMP)");
                                
            } 
      

    ?>