<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'professor_fields', true ); ?>
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
                <strong>Email: </strong>
                <?php echo esc_html( $meta['email'] ); ?>
                <br/>
                <strong>Lattes: </strong>
                <a href="http://lattes.cnpq.br/<?php echo esc_html( $meta['lattes_id'] ); ?>"><?php echo esc_html( $meta['lattes_id'] ); ?></a>
                <br/>
                <strong>google scholar: </strong>
                <a href="https://scholar.google.com.br/<?php echo esc_html( $meta['scholar_id'] ); ?>"><?php echo esc_html( $meta['scholar_id'] ); ?></a>
                <br/>
                <strong>Bolsa Produtividade: </strong>
                <?php echo esc_html( $meta['produtividade'] ); ?>
                <br/>  
                <strong>Página pessoal: </strong>
                <a href="<?php echo esc_html( $meta['link'] ); ?>"><?php echo esc_html( $meta['link'] ); ?></a>
                <br/>  
                <strong>Formação academica: </strong>
                <div><?php echo $meta['formacao']  ?></div>
                <strong>Dia aniversario: </strong>
                <?php echo esc_html( $meta['data_aniversario'] ); ?>
                <br/>
                <strong>Data ingresso: </strong>
                <?php echo esc_html( $meta['data_ingresso'] ); ?>
                <br/>
                <strong>Area de Pesquisa: </strong>
                <div><?php echo $meta['area']  ?></div>
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
