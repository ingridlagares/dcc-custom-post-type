<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'disciplina_fields', true ); ?>
            <header class="entry-header">
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Código: </strong>
                <?php echo esc_html( $meta['codigo'] ); ?>
                <br/>
                <strong>Ementa: </strong>
                <div><?php echo $meta['ementa']  ?></div>
                <strong>Créditos: </strong>
                <?php echo esc_html( $meta['creditos'] ); ?>
                <br/>
                <strong>Carga Horaria: </strong>
                <?php echo esc_html( $meta['carga'] ); ?>
                <br/>           
                <strong>Pré requisitos: </strong>
                <div><?php echo $meta['requisitos']  ?></div>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
