<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'funcionario_fields', true ); ?>
            <header class="entry-header">
                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Sala: </strong>
                <?php echo esc_html( $meta['sala'] ); ?>
                <br/>
                <strong>Ramal: </strong>
                <?php echo esc_html( $meta['ramal'] ); ?>
                <br/>
                <strong>Aniversario: </strong>
                <?php echo esc_html( $meta['aniversario'] ); ?>
                <br/>         
                <strong>Email: </strong>
                <?php echo esc_html( $meta['email'] ); ?>
                <br/>
                <strong>Função: </strong>
                <div><?php echo $meta['funcao']  ?></div>
                <br/>         
                <strong>Setor/Área: </strong>
                <?php echo esc_html( $meta['setor'] ); ?>
                <br/>
                <strong>Data ingresso: </strong>
                <?php echo esc_html( $meta['data_ingresso'] ); ?>
                <br/>         
                <strong>Data saída: </strong>
                <?php echo esc_html( $meta['data_saida'] ); ?>
                <br/>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
