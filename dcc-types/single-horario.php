<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'horario_fields', true ); ?>
            <header class="entry-header">
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Curso: </strong>
                <?php echo esc_html( $meta['curso'] ); ?>
                <br/>
                <strong>Arquivo: </strong>
                <a href="<?php echo esc_html( $meta['arquivo'] ); ?>"><?php echo esc_html( $meta['arquivo'] ); ?></a>
                <br/> 
                <strong>Data de expiração: </strong>
                <?php echo esc_html( $meta['data_exp'] ); ?>
                <br/>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
