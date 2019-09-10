<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'resolucao_fields', true ); ?>
            <header class="entry-header">
                <strong>Número: </strong><?php the_title(); ?><br/>
                <br/>
                <strong>Data: </strong>
                <?php echo esc_html( $meta['data'] ); ?>
        <br/>
                <strong>Arquivo: </strong>
                <a href="<?php echo esc_html( $meta['arquivo'] ); ?>">Download</a>
        <br/>
                <strong>Descrição: </strong>
                <div><?php echo ( $meta['descricao'] ); ?></div>
        <br/>
            </header>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
