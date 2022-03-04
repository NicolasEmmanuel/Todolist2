        <?php   
            include ("config.php");

            /*$content = file_get_contents("https://www.lemonde.fr/jeux-video/rss_full.xml");
            $monRss = new SimpleXMLElement($content);
            
            //var_dump($monRss);
            foreach($monRss->channel->item as $entry){
            
                //echo $entry->title;
                echo $entry->description;
                $mysqli->query("INSERT INTO `actu` (`id`, `Title`, `Description`, `dateins`) VALUES (NULL,'".$entry->title."' '', '".$entry->description."', CURRENT_TIMESTAMP)");
                                
            } 

            exit;*/
            
            include("common/header.html.php");
        ?>
            
            <!--Center-->
            <!-- Begin page content -->
            <main class="flex-shrink-0">
            <div class="container">

        <?php
            include("modules/module.php");
        ?>
            

            </div>
            </main>

            <!--END center-->

        <?php

            include("common/footer.html.php");

        ?>








          
     
    
