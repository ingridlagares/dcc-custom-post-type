<?php get_header(); ?>
<div id="primary">
    <div id="content" role="main">
    <?php while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $meta = get_post_meta( $post->ID, 'projeto_fields', true ); ?>
            <header class="entry-header">
                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>
                <strong>Título: </strong><?php the_title(); ?>
                <br/>
                <strong>Descrição Pública: </strong>
                <div><?php echo $meta['descricao']  ?></div>
                 <strong>Sigla: </strong>
                <?php echo esc_html( $meta['sigla'] ); ?>
                <br/>
                <strong>Linha de pesquisa: </strong>
                <?php foreach($meta['linhas'] as $linha) { ?>
                <?php echo $linha . "," ;?>   
                <?php } ?>
                <br/>  
                <strong>Início: </strong>
                <?php echo esc_html( $meta['inicio'] ); ?>
                <br/>                
                <strong>Término: </strong>
                <?php echo esc_html( $meta['termino'] ); ?>
                <br/>
                <strong>Coordenador: </strong>
                <?php echo esc_html( $meta['coordenador'] ); ?>
                <br/>
                <strong>Integrantes do DCC: </strong>
                <?php foreach($meta['professores'] as $professor) { ?>
                <?php echo $professor . "," ;?>   
                <?php } ?>
                <br/>  
                <strong>Agência: </strong>
                <div><?php echo $meta['agencia']  ?></div>             
                <strong>Programa: </strong>
                <div><?php echo $meta['programa']  ?></div> 
                <strong>Natureza: </strong>
                <div><?php echo $meta['natureza']  ?></div> 
                <strong>Situação: </strong>
                <div><?php echo $meta['situacao']  ?></div>                
                <strong>Processo: </strong>
                <div><?php echo $meta['processo']  ?></div> 
                <strong>id Projeto DCC: </strong>
                <?php echo esc_html( $meta['id'] ); ?>
                <br/>
                <strong>Resolução da Câmara: </strong>
                <div><?php echo $meta['resolucao']  ?></div> 
            </header>
        </article>
    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
