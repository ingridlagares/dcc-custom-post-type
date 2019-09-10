<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'laboratorio_fields', true ); ?>
            <header class="entry-header">
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Sigla: </strong>
                <?php echo esc_html( $meta['sigla'] ); ?>
                <br/>
                <strong>Descrição: </strong>
                <div><?php echo $meta['descricao']  ?></div>
                <div style="float: right; margin: 10px"><strong>Logomarca: </strong>
                <img src="<?php echo esc_html( $meta['logo'] ); ?>" style="height:142px;"></div>
                <br/>
                <strong>Coordenadores: </strong>
                <?php foreach($meta['coordenadores'] as $coordenador) { ?>
                <?php echo $coordenador . "," ;?>   
                <?php } ?>
                <br/> 
                <strong>Professores: </strong>
                <?php foreach($meta['professores'] as $professor) { ?>
                <?php echo $professor . "," ;?>   
                <?php } ?>
                <br/>            
                <strong>Sala: </strong>
                <?php echo esc_html( $meta['sala'] ); ?>
                <br/>
                <strong>Ramal: </strong>
                <?php echo esc_html( $meta['ramal'] ); ?>
                <br/>
                <div style="float: right; margin: 10px">
                <strong>Foto: </strong>
                <img src="<?php echo esc_html( $meta['foto'] ); ?>" style="height:142px;"></div>
                <br/>
                <strong>Vídeo: </strong>
                <a href="<?php echo esc_html( $meta['url'] ); ?>">Link do vídeo</a>
                <br/>
                <strong>Áreas de Pesquisa: </strong>
                <div><?php echo $meta['areas']  ?></div>
                <br/>
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
