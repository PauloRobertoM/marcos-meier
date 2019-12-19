<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php include 'components/vitrine.php'; ?>

    <section class="palestras">
        <div class="container">
            <h1 class="text-center">PALESTRAS</h1>
            <div class="owl-carousel owl-theme owl-palestra">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'palestras',
                    );
                    $palestras = get_posts($args);
                ?>
                <?php foreach ($palestras as $palestra) : ?>
                    <?php $tit_palestra = $palestra->post_title; ?>
                    <?php $subtit_palestra = $palestra->palestras_subtitulo; ?>
                    <div class="item">
                        <?php
                            $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                            foreach ( $palestras as $palestra ) {
                                echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' />";
                            }
                        ?>
                        <div class="conteudo">
                            <h2><?= $tit_palestra ?></h2>
                            <p><?= $subtit_palestra ?></p>
                            <a href="<?php the_permalink($palestra->ID); ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> SAIBA MAIS</a>
                        </div><!-- conteudo -->
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
            <iframe width="100%" height="470" src="https://www.youtube.com/embed/sG4RDGRKjzg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div><!-- container -->
    </section><!-- palestras -->

    <section class="depoimentos">
        <div class="container">
            <h1 class="text-center">DEPOIMENTOS</h1>
            <div class="owl-carousel owl-theme owl-depoimento">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'depoimentos',
                    );
                    $depoimentos = get_posts($args);
                ?>
                <?php foreach ($depoimentos as $depoimento) : ?>
                    <?php $tit_depoimento = $depoimento->post_title; ?>
                    <?php $corpo_depoimento = $depoimento->post_content; ?>
                    <div class="item">
                        <h4 class="text-center">"<?= $corpo_depoimento ?>"</h4>
                        <p class="text-center"><?= $tit_depoimento ?></p>
                    </div><!-- item -->
                <?php endforeach; ?>
            </div><!-- owl-carousel -->
        </div><!-- container -->
    </section><!-- depoimentos -->

    <section class="instagram">
        <div class="container">
            <h1 class="text-center">@MARCOSMEIER</h1>
            
        </div><!-- container -->
    </section><!-- instagram -->

    <section class="perfil">
        <div class="item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/perfil.jpg">
        </div><!-- item1 -->
        <div class="item2">
            <h1>BIOGRAFIA</h1>
            <p>Psicólogo, professor de matemática, escritor e mestre em educação.</p>
        </div><!-- item2 -->
    </section><!-- perfil -->

<?php get_footer(); ?>