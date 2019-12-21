<?php get_header(); ?>

    <section class="titulo-interno">
        <h1 class="text-center">PALESTRAS</h1>
        <h2 class="text-center">RELACIONAMENTO INTERPESSOAL NAS EMPRESAS</h2>
    </section><!-- titulo-interno -->

    <section class="interna palestras-listagem">
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
            <div class="palestras-lista">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <?php
                                $palestras = rwmb_meta('palestras_foto', 'type=plupload_image', $palestra->ID);
                                foreach ( $palestras as $palestra ) {
                                    echo "<img src='{$palestra['url']}' alt='{$palestra['alt']}' class='img-responsive' />";
                                }
                            ?>
                        </div><!-- md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <h4><?= $tit_palestra ?></h4>
                            <a href="<?php the_permalink($palestra->ID); ?>" class="btn-geral"><i class="fa fa-plus-circle" aria-hidden="true"></i> CONTRATAR PALESTRA</a>
                        </div><!-- md-6 -->
                    </div><!-- row -->
                    <p><?= $subtit_palestra ?></p>
                </div><!-- container -->
            </div><!-- palestras-lista -->
        <?php endforeach; ?>
        <div class="palestras">
            <div class="container">
                <div class="owl-carousel owl-theme owl-palestra">
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
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
            </div><!-- container -->
        </div><!-- palestras -->
    </section><!-- interna -->

<?php get_footer(); ?>