<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'palestra_fields', true ); ?>
            <header class="entry-header">
                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Resumo: </strong>
                <div><?php echo $meta['resumo']  ?></div>
                <strong>Palestrante: </strong>
                <?php echo esc_html( $meta['palestrante'] ); ?>
                <br/>
                <strong>Short Bio: </strong>
                <div><?php echo $meta['bio']  ?></div>
                <strong>Data e hora: </strong>
                <?php echo esc_html( $meta['data'] ); ?>, <?php echo esc_html( $meta['hora'] ); ?>
                <br/>    
                <strong>Local: </strong>
                <div><?php echo $meta['onde']  ?></div>
                <strong>Professor envolvido: </strong>
                <?php echo esc_html( $meta['professor'] ); ?>
                <br/>    
                <strong>Arquivo pdf: </strong>
                <a href="<?php echo esc_html( $meta['arquivo'] ); ?>">Baixe aqui o arquivo pdf da <?php the_title(); ?></a>
                <br/>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
