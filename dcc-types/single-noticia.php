<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'noticia_fields', true ); ?>
            <header class="entry-header">
                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Olho: </strong>
                <?php echo esc_html( $meta['olho'] ); ?>
                <br/>
                <strong>Descrição: </strong>
                <?php echo esc_html( $meta['descricao'] ); ?>
                <br/>
                <strong>Link: </strong>
                <a href="<?php echo esc_html( $meta['link'] ); ?>"><?php echo esc_html( $meta['link'] ); ?></a>
                <br/>
                <strong>Tipo: </strong>
                <?php echo esc_html( $meta['tipo'] ); ?>
                <br/>    
                <strong>Professores: </strong>
                <?php foreach($meta['professores'] as $professor) { ?>
                <?php echo $professor . "," ;?>   
                <?php } ?>
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
