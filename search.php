<?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                $ma_categorie = "4w4";
                 get_template_part("template-parts/search-cours", $ma_categorie);
             endwhile;
        endif;    
    ?>