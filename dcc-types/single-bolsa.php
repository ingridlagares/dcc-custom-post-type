<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $meta = get_post_meta( $post->ID, 'bolsa_fields', true ); ?>
            <header class="entry-header">
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Descrição: </strong>
                <div><?php echo $meta['descricao']  ?></div>
                <strong>Publico Alvo: </strong>
                <?php echo esc_html( $meta['alvo'] ); ?>
                <br/>
                <strong>Tipo: </strong>
                Bolsa destinada a <?php echo esc_html( $meta['tipo'] ); ?>
                <br/>
                <strong>Data limite: </strong>
                <?php echo esc_html( $meta['limite'] ); ?>
                <br/>
                 <strong>Data expiração: </strong>
                <?php echo esc_html( $meta['expiracao'] ); ?>
                <br/>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>

