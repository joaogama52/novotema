<?php get_header(); ?>

<?php

    if(have_posts()){
        while(have_posts()){
            the_post();//post
            the_title();//titulo
?>
            <div class="img-responsive foto"><?php the_post_thumbnail(); ?></div>
<?php
            the_content();//conteudo
        }
    }

?>

<?php get_footer();?>