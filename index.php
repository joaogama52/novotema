<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2>Seja bem vindo ao meu novo tema</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php masterslider(1); ?>
    </div>
</div>
<div class="row">
<?php
$cont = 0;
    if(have_posts()){//analisa se tem posts
        while(have_posts()){// loop para varios posts
            the_post();//Pega o post
            $cont++;
            if($cont <= 3){
?>
    <div class="col-md-4">
        <h3><?php the_title();//Exibe o título ?></h3>
        <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
        <p><?php the_excerpt();//Exibe o conteúdo resumido (primeiras palavras) ?></p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">Leia Mais</a>
    
    </div>
<?php
            }//fim do if do contador
        }//fim do loop
    }//fim do if
?>
</div>
<?php get_footer(); ?>