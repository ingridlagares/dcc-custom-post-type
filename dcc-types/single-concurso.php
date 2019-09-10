<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $meta = get_post_meta( $post->ID, 'concurso_fields', true ); ?>
            <header class="entry-header">
                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
                <strong>Título: </strong><?php the_title(); ?><br/>
                <strong>Descrição: </strong>
                <div><?php echo $meta['descricao']  ?></div>
                <strong>Link: </strong>
                <strong>Edital: </strong>
                <a href="<?php echo esc_html( $meta['pdf'] ); ?>">Download</a>
		<br/>
                <strong>Link: </strong>
                <?php echo esc_html( $meta['link'] ); ?>
		<br/>
                <strong>Data de publicação: </strong>
                <?php echo esc_html( $meta['data_pub'] ); ?>
		<br/>
                <strong>Data de expiração: </strong>
                <?php echo esc_html( $meta['data_exp'] ); ?>
            </header>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
