<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'publicacao_fields', true ); ?>
            <header class="entry-header">
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Descrição: </strong>
                <div><?php echo $meta['descricao']  ?></div>
                <strong>Autor: </strong>
                <?php echo esc_html( $meta['autor'] ); ?>
                <br/> 
                <strong>Capa: </strong>
                <img src="<?php echo esc_html( $meta['capa'] ); ?>">
                <br/>
                <strong>Editora: </strong>
                <?php echo esc_html( $meta['editora'] ); ?>
                <br/> 
                <strong>Edição: </strong>
                <?php echo esc_html( $meta['edicao'] ); ?>
                <br/> 
                <strong>Tipo: </strong>
                <?php echo esc_html( $meta['tipo'] ); ?>
                <br/>          
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
