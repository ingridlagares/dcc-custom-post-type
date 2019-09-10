<?php
/**
 * Plugin Name: DCC Types
 * Description: DCC Post Types Fields.
 * Plugin URI: http://dcc.ufmg.br/
 * Author: DCC
 * Version: 1.0.0
 * Author URI: http://dcc.ufmg.br/
*/

/*         
*         Create all the post types
*
*/
add_action( 'init', 'create_posts' );
function create_posts() {
  register_post_type( 'noticia',
        array(
            'labels' => array(
                'name' => 'Notícias',
                'singular_name' => 'Notícia',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Notícia',
                'edit' => 'Editar',
                'edit_item' => 'Editar Notícia',
                'new_item' => 'Novo Notícia Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Notícia',
                'search_items' => 'Procurar Notícia',
                'not_found' => 'Nenhum Notícia encontrado',
                'not_found_in_trash' => 'Nenhum Notícia encontrado na lixeira',
                'parent' => 'Parent Notícia'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-smiley',
            'has_archive' => true
        )
    );
  register_post_type( 'ata',
        array(
            'labels' => array(
                'name' => 'Atas',
                'singular_name' => 'Ata',
                'add_new' => 'Adicionar Nova',
                'add_new_item' => 'Adicionar Nova Ata',
                'edit' => 'Editar',
                'edit_item' => 'Editar Ata',
                'new_item' => 'Nova Ata Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Ata',
                'search_items' => 'Procurar Ata',
                'not_found' => 'Nenhuma Ata encontrado',
                'not_found_in_trash' => 'Nenhuma Ata encontrado na lixeira',
                'parent' => 'Parent Ata'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-admin-post',# plugins_url( 'images/ata.png', __FILE__ ),
            'has_archive' => true
        )
    );
  register_post_type( 'bolsa',
        array(
            'labels' => array(
                'name' => 'Bolsas',
                'singular_name' => 'Bolsa',
                'add_new' => 'Adicionar Nova',
                'add_new_item' => 'Adicionar Nova Bolsa',
                'edit' => 'Editar',
                'edit_item' => 'Editar Bolsa',
                'new_item' => 'Nova Bolsa Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Bolsa',
                'search_items' => 'Procurar Bolsa',
                'not_found' => 'Nenhuma Bolsa encontrado',
                'not_found_in_trash' => 'Nenhuma Bolsa encontrado na lixeira',
                'parent' => 'Parent Bolsa'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-money',
            'has_archive' => true
        )
    );
  register_post_type( 'concurso',
        array(
            'labels' => array(
                'name' => 'Concursos',
                'singular_name' => 'Concurso',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Concurso',
                'edit' => 'Editar',
                'edit_item' => 'Editar Concurso',
                'new_item' => 'Novo Concurso Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Concurso',
                'search_items' => 'Procurar Concurso',
                'not_found' => 'Nenhum Concurso encontrado',
                'not_found_in_trash' => 'Nenhum Concurso encontrado na lixeira',
                'parent' => 'Parent Concurso'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-businessman',#plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
  register_post_type( 'banner',
        array(
            'labels' => array(
                'name' => 'Banners',
                'singular_name' => 'Banner',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Banner',
                'edit' => 'Editar',
                'edit_item' => 'Editar Banner',
                'new_item' => 'Novo Banner Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Banner',
                'search_items' => 'Procurar Banner',
                'not_found' => 'Nenhum Banner encontrado',
                'not_found_in_trash' => 'Nenhum Banner encontrado na lixeira',
                'parent' => 'Parent Banner'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-interactive',
            'has_archive' => true
        )
    );
  register_post_type( 'curso',
        array(
            'labels' => array(
                'name' => 'Cursos e Extensões',
                'singular_name' => 'Curso e Extensão',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Curso',
                'edit' => 'Editar',
                'edit_item' => 'Editar Curso',
                'new_item' => 'Novo Curso Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Curso',
                'search_items' => 'Procurar Curso',
                'not_found' => 'Nenhum Curso encontrado',
                'not_found_in_trash' => 'Nenhum Curso encontrado na lixeira',
                'parent' => 'Parent Curso'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-book',
            'has_archive' => true
        )
    );
  register_post_type( 'seguranca',
        array(
            'labels' => array(
                'name' => 'Dicas de Segurança',
                'singular_name' => 'Dica de Segurança',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Dica de Segurança',
                'edit' => 'Editar',
                'edit_item' => 'Editar Dica de Segurança',
                'new_item' => 'Novo Dica de Segurança Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Dica de Segurança',
                'search_items' => 'Procurar Dica de Segurança',
                'not_found' => 'Nenhum Dica de Segurança encontrado',
                'not_found_in_trash' => 'Nenhum Dica de Segurança encontrado na lixeira',
                'parent' => 'Parent Dica de Segurança'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-admin-network',
            'has_archive' => true
        )
    );
  register_post_type( 'disciplina',
        array(
            'labels' => array(
                'name' => 'Disciplinas',
                'singular_name' => 'Disciplina',
                'add_new' => 'Adicionar Nova',
                'add_new_item' => 'Adicionar Nova Disciplina',
                'edit' => 'Editar',
                'edit_item' => 'Editar Disciplina',
                'new_item' => 'Nova Disciplina Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Disciplina',
                'search_items' => 'Procurar Disciplina',
                'not_found' => 'Nenhuma Disciplina encontrado',
                'not_found_in_trash' => 'Nenhuma Disciplina encontrado na lixeira',
                'parent' => 'Parent Disciplina'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-spreadsheet',
            'has_archive' => true
        )
    );

  register_post_type( 'optativa',
        array(
            'labels' => array(
                'name' => 'Disciplinas - Optativas - Listas',
                'singular_name' => 'Disciplina - Optativa - Lista',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Nova Disciplina - Optativa - Lista',
                'edit' => 'Editar',
                'edit_item' => 'Editar Disciplina - Optativa - Lista',
                'new_item' => 'Nova Disciplina - Optativa - Lista Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Disciplina - Optativa - Lista',
                'search_items' => 'Procurar Disciplina - Optativa - Lista',
                'not_found' => 'Nenhuma Disciplina - Optativa - Lista encontrado',
                'not_found_in_trash' => 'Nenhuma Disciplina - Optativa - Lista encontrado na lixeira',
                'parent' => 'Parent Disciplina - Optativa - Lista'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-text',
            'has_archive' => true
        )
    );
  register_post_type( 'edital',
        array(
            'labels' => array(
                'name' => 'Editais',
                'singular_name' => 'Edital',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Nova Edital',
                'edit' => 'Editar',
                'edit_item' => 'Editar Edital',
                'new_item' => 'Nova Edital Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Edital',
                'search_items' => 'Procurar Edital',
                'not_found' => 'Nenhuma Edital encontrado',
                'not_found_in_trash' => 'Nenhuma Edital encontrado na lixeira',
                'parent' => 'Parent Edital'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',  ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-editor-quote',
            'has_archive' => true
        )
    );
  register_post_type( 'emprego',
        array(
            'labels' => array(
                'name' => 'Empregos',
                'singular_name' => 'Emprego',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Emprego',
                'edit' => 'Editar',
                'edit_item' => 'Editar Emprego',
                'new_item' => 'Novo Emprego Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Emprego',
                'search_items' => 'Procurar Emprego',
                'not_found' => 'Nenhuma Emprego encontrado',
                'not_found_in_trash' => 'Nenhuma Emprego encontrado na lixeira',
                'parent' => 'Parent Emprego'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-networking',
            'has_archive' => true
        )
    );
    register_post_type( 'estagio',
        array(
            'labels' => array(
                'name' => 'Estágios',
                'singular_name' => 'Estágio',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Estágio',
                'edit' => 'Editar',
                'edit_item' => 'Editar Estágio',
                'new_item' => 'Novo Estágio Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Estágio',
                'search_items' => 'Procurar Estágio',
                'not_found' => 'Nenhuma Estágio encontrado',
                'not_found_in_trash' => 'Nenhuma Estágio encontrado na lixeira',
                'parent' => 'Parent Estágio'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-networking',
            'has_archive' => true
        )
    );
    register_post_type( 'funcionario',
        array(
            'labels' => array(
                'name' => 'Funcionários',
                'singular_name' => 'Funcionário',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Funcionário',
                'edit' => 'Editar',
                'edit_item' => 'Editar Funcionário',
                'new_item' => 'Novo Funcionário Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Funcionário',
                'search_items' => 'Procurar Funcionário',
                'not_found' => 'Nenhuma Funcionário encontrado',
                'not_found_in_trash' => 'Nenhuma Funcionário encontrado na lixeira',
                'parent' => 'Parent Funcionário'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-universal-access-alt',
            'has_archive' => true
        )
    );
    register_post_type( 'horario',
        array(
            'labels' => array(
                'name' => 'Horário-Aula',
                'singular_name' => 'Horário-Aula',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Horário-Aula',
                'edit' => 'Editar',
                'edit_item' => 'Editar Horário-Aula',
                'new_item' => 'Novo Horário-Aula Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Horário-Aula',
                'search_items' => 'Procurar Horário-Aula',
                'not_found' => 'Nenhuma Horário-Aula encontrado',
                'not_found_in_trash' => 'Nenhuma Horário-Aula encontrado na lixeira',
                'parent' => 'Parent Horário-Aula'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-calendar-alt',
            'has_archive' => true
        )
    );
    register_post_type( 'laboratorio',
        array(
            'labels' => array(
                'name' => 'Laboratórios',
                'singular_name' => 'Laboratório',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Laboratório',
                'edit' => 'Editar',
                'edit_item' => 'Editar Laboratório',
                'new_item' => 'NovoLaboratório Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Laboratório',
                'search_items' => 'Procurar Laboratório',
                'not_found' => 'Nenhuma Laboratório encontrado',
                'not_found_in_trash' => 'Nenhuma Laboratório encontrado na lixeira',
                'parent' => 'Parent Laboratórioa'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-image-filter',
            'has_archive' => true
        )
    );
  register_post_type( 'palestra',
        array(
            'labels' => array(
                'name' => 'Palestras',
                'singular_name' => 'Palestra',
                'add_new' => 'Adicionar Nova',
                'add_new_item' => 'Adicionar Nova Palestra',
                'edit' => 'Editar',
                'edit_item' => 'Editar Palestra',
                'new_item' => 'Nova Palestra Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Palestra',
                'search_items' => 'Procurar Palestra',
                'not_found' => 'Nenhuma Palestra encontrado',
                'not_found_in_trash' => 'Nenhuma Palestra encontrado na lixeira',
                'parent' => 'Parent Palestra'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-interactive',
            'has_archive' => true
        )
    );
  register_post_type( 'premiacao',
        array(
            'labels' => array(
                'name' => 'Premiações',
                'singular_name' => 'Premiação',
                'add_new' => 'Adicionar Nova',
                'add_new_item' => 'Adicionar Nova Premiação',
                'edit' => 'Editar',
                'edit_item' => 'Editar Premiação',
                'new_item' => 'Nova Premiação Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Premiação',
                'search_items' => 'Procurar Premiação',
                'not_found' => 'Nenhuma Premiação encontrado',
                'not_found_in_trash' => 'Nenhuma Premiação encontrado na lixeira',
                'parent' => 'Parent Premiação'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-interactive',
            'has_archive' => true
        )
    );
  register_post_type( 'professor',
        array(
            'labels' => array(
                'name' => 'Professores',
                'singular_name' => 'Professor',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Professor',
                'edit' => 'Editar',
                'edit_item' => 'Editar Professor',
                'new_item' => 'Novo Professor Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Professor',
                'search_items' => 'Procurar Professor',
                'not_found' => 'Nenhum Professor encontrado',
                'not_found_in_trash' => 'Nenhum Professor encontrado na lixeira',
                'parent' => 'Parent Professor'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-universal-access',
            'has_archive' => true
        )
    );
  register_post_type( 'projeto',
        array(
            'labels' => array(
                'name' => 'Projetos',
                'singular_name' => 'Projeto',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Projeto',
                'edit' => 'Editar',
                'edit_item' => 'Editar Projeto',
                'new_item' => 'Novo Projeto Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Projeto',
                'search_items' => 'Procurar Projeto',
                'not_found' => 'Nenhum Projeto encontrado',
                'not_found_in_trash' => 'Nenhum Projeto encontrado na lixeira',
                'parent' => 'Parent Projeto'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'thumbnail'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-format-aside',
            'has_archive' => true
        )
    );
  register_post_type( 'publicacao',
        array(
            'labels' => array(
                'name' => 'Publicações',
                'singular_name' => 'Publicação',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Publicação',
                'edit' => 'Editar',
                'edit_item' => 'Editar Publicação',
                'new_item' => 'Novo Publicação Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Publicação',
                'search_items' => 'Procurar Publicação',
                'not_found' => 'Nenhum Publicação encontrado',
                'not_found_in_trash' => 'Nenhum Publicação encontrado na lixeira',
                'parent' => 'Parent Publicação'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-interactive',
            'has_archive' => true
        )
    );
  register_post_type( 'resolucao',
        array(
            'labels' => array(
                'name' => 'Resoluções',
                'singular_name' => 'Resolução',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Resolução',
                'edit' => 'Editar',
                'edit_item' => 'Editar Resolução',
                'new_item' => 'Novo Resolução Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Resolução',
                'search_items' => 'Procurar Resolução',
                'not_found' => 'Nenhum Resolução encontrado',
                'not_found_in_trash' => 'Nenhum Resolução encontrado na lixeira',
                'parent' => 'Parent Resolução'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-welcome-write-blog',
            'has_archive' => true
        )
    );
  register_post_type( 'video',
        array(
            'labels' => array(
                'name' => 'Vídeos',
                'singular_name' => 'Vídeo',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Vídeo',
                'edit' => 'Editar',
                'edit_item' => 'Editar Vídeo',
                'new_item' => 'Novo Vídeo Review',
                'view' => 'Visualizar',
                'view_item' => 'Visualizar Vídeo',
                'search_items' => 'Procurar Vídeo',
                'not_found' => 'Nenhum Vídeo encontrado',
                'not_found_in_trash' => 'Nenhum Vídeo encontrado na lixeira',
                'parent' => 'Parent Vídeo'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title',),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-video-alt3',
            'has_archive' => true
        )
    );
}


/*         
*         INCLUDE TEMPLATES FOR EACH POST TYPE
*         Procurar in the theme and this plugin the file single-{type}.php
*
*/
add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'ata' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-ata.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-ata.php';
            }
        }
    }
    if ( get_post_type() == 'banner' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-banner.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-banner.php';
            }
        }
    }
    if ( get_post_type() == 'concurso' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-concurso.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-concurso.php';
            }
        }
    }
    if ( get_post_type() == 'bolsa' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-bolsa.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-bolsa.php';
            }
        }
    }   
    if ( get_post_type() == 'curso' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-curso.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-curso.php';
            }
        }
    }
    if ( get_post_type() == 'seguranca' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-seguranca.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-seguranca.php';
            }
        }
    }
    if ( get_post_type() == 'disciplina' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-disciplina.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-disciplina.php';
            }
        }
    }
    if ( get_post_type() == 'optativa' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-optativa.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-optativa.php';
            }
        }
    } 
    if ( get_post_type() == 'edital' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-edital.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-edital.php';
            }
        }
    }
    if ( get_post_type() == 'emprego' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-emprego.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-emprego.php';
            }
        }
    }  
    if ( get_post_type() == 'estagio' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-estagio.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-estagio.php';
            }
        }
    }                          
    if ( get_post_type() == 'funcionario' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-funcionario.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-funcionario.php';
            }
        }
    }   
    if ( get_post_type() == 'horario' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-horario.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-horario.php';
            }
        }
    }  
    if ( get_post_type() == 'laboratorio' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-laboratorio.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-laboratorio.php';
            }
        }
    }
    if ( get_post_type() == 'palestra' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-palestra.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-palestra.php';
            }
        }
    }  
    if ( get_post_type() == 'premiacao' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-premiacao.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-premiacao.php';
            }
        }
    }
    if ( get_post_type() == 'professor' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-professor.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-professor.php';
            }
        }
    }  
    if ( get_post_type() == 'projeto' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-projeto.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-projeto.php';
            }
        }
    }  
    if ( get_post_type() == 'publicacao' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-publicacao.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-publicacao.php';
            }
        }
    }  
    if ( get_post_type() == 'resolucao' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-resolucao.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-resolucao.php';
            }
        }
    }
    if ( get_post_type() == 'video' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-video.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-video.php';
            }
        }
    } 
    if ( get_post_type() == 'noticia' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-noticia.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-noticia.php';
            }
        }
    } 
    return $template_path;
}




/*         
*         ADD META BOX FOR ATA'S
*         Display and save
*
*/

add_action( 'admin_init', 'ata_admin' );
function ata_admin() {
    add_meta_box(
	'ata_meta_box',
    'Ata Detalhes',
    'display_ata_meta_box',
    'ata',
	'normal',
	'high'
    );
}

function display_ata_meta_box( $ata ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'ata_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="ata_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
    <table>
        <tr>
            <td class="title">Data da reunião</td>
        <td><input type="date" name="ata_fields[data]" value="<?php if (is_array($meta) && isset($meta['data'])) {  echo $meta['data']; } ?>"></td>
        </tr>
        <tr>
            <td class="title">Arquivo (PDF)</td>
        <td>
        <input type="text" name="ata_fields[pdf]" id="ata_fields[pdf]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['pdf'])) {  echo $meta['pdf']; }  ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
    </table>


    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php

}

add_action( 'save_post', 'save_ata_fields_meta' );
function save_ata_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['ata_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['ata_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'ata_fields', true );
    if (isset($_POST['ata_fields'])) { //Fix 3
      $new = $_POST['ata_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'ata_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'ata_fields', $old );
      }
    }
}



/*
*      ADD META BOX FOR Banner'S     
*/

add_action( 'admin_init', 'banner_admin' );
function banner_admin() {
    add_meta_box(
    'banner_meta_box',
    'Banner Detalhes',
    'display_banner_meta_box',
    'banner',
    'normal',
    'high'
    );
}

function display_banner_meta_box( $banner ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'banner_fields', true );?>

    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>

    <input type="hidden" name="banner_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
        <td class="title">Descrição</td>
        <td>        
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'banner_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'banner_fields[descricao]',
            'textarea_rows' => 20,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>    
        <tr>
            <td class="title">Link</td>
        <td><input type="text" name="banner_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr>
        <tr>
            <td class="title">Data de expiração</td>
        <td><input type="date" name="banner_fields[data]" value="<?php if (is_array($meta) && isset($meta['data'])) {  echo $meta['data']; } ?>"></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_banner_fields_meta' );
function save_banner_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['banner_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['banner_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'banner_fields', true );
    if (isset($_POST['banner_fields'])) { //Fix 3
      $new = $_POST['banner_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'banner_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'banner_fields', $old );
      }
    }
}



/*
*      ADD META BOX FOR BOLSA'S     
*/

add_action( 'admin_init', 'bolsa_admin' );
function bolsa_admin() {
    add_meta_box(
    'bolsa_meta_box',
    'Bolsa Detalhes',
    'display_bolsa_meta_box',
    'bolsa',
    'normal',
    'high'
    );
}

function display_bolsa_meta_box( $bolsa ) {
    global $post;  
    
    $meta = get_post_meta( $post->ID, 'bolsa_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="bolsa_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td class="title">Descrição</td>
        <td><?php  
        $content = $meta['descricao'];
        $editor_id = 'bolsa_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'bolsa_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>  
        <tr>
            <td class="title">Público alvo</td>
        <td ><input style="width: 50%" type="text" name="bolsa_fields[alvo]" value="<?php if (is_array($meta) && isset($meta['alvo'])) {  echo $meta['alvo']; } ?>"></td>
        </tr>
        <tr>
            <td class="title">Tipo</td>
                <td><select name="bolsa_fields[tipo]" id="bolsa_fields[tipo]">
                    <option value="monitoria" <?php if (is_array($meta) && isset($meta['limite'])) { selected( $meta['tipo'], 'monitoria' ); } ?>>Monitoria</option>
                    <option value="pesquisa" <?php if (is_array($meta) && isset($meta['limite'])) { selected( $meta['tipo'], 'pesquisa' ); } ?>>Pesquisa</option>
                </select></td>
        </tr>
        <tr>
            <td class="title">Data de limite</td>
        <td><input type="date" name="bolsa_fields[limite]" value="<?php if (is_array($meta) && isset($meta['limite'])) {  echo $meta['limite']; } ?>"></td>
        </tr>
                <tr>
            <td class="title">Data de expiração</td>
        <td><input type="date" name="bolsa_fields[expiracao]" value="<?php if (is_array($meta) && isset($meta['expiracao'])) {  echo $meta['expiracao']; } ?>"></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_bolsa_fields_meta' );
function save_bolsa_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['bolsa_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['bolsa_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'bolsa_fields', true );
    if (isset($_POST['bolsa_fields'])) { //Fix 3
      $new = $_POST['bolsa_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'bolsa_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'bolsa_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR CONCURSO'S
*         Display and save
*
*/
add_action( 'admin_init', 'concurso_admin' );
function concurso_admin() {
    add_meta_box(
    'concurso_meta_box',
    'Concurso Detalhes',
    'display_concurso_meta_box',
    'concurso',
    'normal',
    'high'
    );
}

function display_concurso_meta_box( $concurso ) {
    global $post;  
    
    $meta = get_post_meta( $post->ID, 'concurso_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="concurso_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição do Concurso</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'concurso_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'concurso_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?>
        </td>
        </tr>
        <tr>
            <td style="width: 150px">Edital (PDF)</td>
        <td>
        <input type="text" name="concurso_fields[pdf]" id="concurso_fields[pdf]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['pdf'])) {  echo $meta['pdf']; }  ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
        <tr>
            <td style="width: 150px">Link</td>
        <td><input type="text" name="concurso_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de publicação</td>
        <td><input type="date" name="concurso_fields[data_pub]" value="<?php if (is_array($meta) && isset($meta['data_pub'])) {  echo $meta['data_pub']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="concurso_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
        </tr>
    </table>


    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_concurso_fields_meta' );
function save_concurso_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['concurso_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['concurso_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'concurso_fields', true );
    if (isset($_POST['concurso_fields'])) { //Fix 3
      $new = $_POST['concurso_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'concurso_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'concurso_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR CURSO'S
*         Display and save
*
*/
add_action( 'admin_init', 'curso_admin' );
function curso_admin() {
    add_meta_box(
    'curso_meta_box',
    'Curso e Extensão Detalhes',
    'display_curso_meta_box',
    'curso',
    'normal',
    'high'
    );
}

function display_curso_meta_box( $curso ) {
    global $post;      
    $meta = get_post_meta( $post->ID, 'curso_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="curso_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'curso_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'curso_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?>
        </td>
        </tr>  
        <tr>
            <td style="width: 150px">Link</td>
        <td><input type="text" name="curso_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="curso_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
        
    </table>
    <?php
}

add_action( 'save_post', 'save_curso_fields_meta' );
function save_curso_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['curso_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['curso_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'curso_fields', true );
    if (isset($_POST['curso_fields'])) { //Fix 3
      $new = $_POST['curso_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'curso_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'curso_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR DICAS DE SEGURANCA'S
*         Display and save
*
*/
add_action( 'admin_init', 'seguranca_admin' );
function seguranca_admin() {
    add_meta_box(
    'seguranca_meta_box',
    'Dica e Segurança Detalhes',
    'display_seguranca_meta_box',
    'seguranca',
    'normal',
    'high'
    );
}

function display_seguranca_meta_box( $seguranca ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'seguranca_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="seguranca_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'seguranca_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'seguranca_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>  
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="seguranca_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
        
    </table>
    <?php
}

add_action( 'save_post', 'save_seguranca_fields_meta' );
function save_seguranca_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['seguranca_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['seguranca_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'seguranca_fields', true );
    if (isset($_POST['seguranca_fields'])) { //Fix 3
      $new = $_POST['seguranca_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'seguranca_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'seguranca_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR DISCIPLINA'S
*         Display and save
*
*/
add_action( 'admin_init', 'disciplina_admin' );
function disciplina_admin() {
    add_meta_box(
    'disciplina_meta_box',
    'Disciplina Detalhes',
    'display_disciplina_meta_box',
    'disciplina',
    'normal',
    'high'
    );
}

function display_disciplina_meta_box( $disciplina ) {
    global $post;   
    $meta = get_post_meta( $post->ID, 'disciplina_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="disciplina_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Código</td>
        <td><input type="text" name="disciplina_fields[codigo]" value="<?php if (is_array($meta) && isset($meta['codigo'])) {  echo $meta['codigo']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Ementa</td>
        <td>
        <?php  
        $content = $meta['ementa'];
        $editor_id = 'disciplina_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'disciplina_fields[ementa]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Créditos</td>
        <td><input type="text" name="disciplina_fields[creditos]" value="<?php if (is_array($meta) && isset($meta['creditos'])) {  echo $meta['creditos']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Carga Horária</td>
        <td><input type="text" name="disciplina_fields[carga]" value="<?php if (is_array($meta) && isset($meta['carga'])) {  echo $meta['carga']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Pré Requisitos</td>
        <td>
        <?php  
        $content = $meta['requisitos'];
        $editor_id = 'disciplina_fields2' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'disciplina_fields[requisitos]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>        
    </table>
    <?php
}

add_action( 'save_post', 'save_disciplina_fields_meta' );
function save_disciplina_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['disciplina_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['disciplina_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'disciplina_fields', true );
    if (isset($_POST['disciplina_fields'])) { //Fix 3
      $new = $_POST['disciplina_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'disciplina_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'disciplina_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR Disciplinas-Optativas-Lista'S
*         Display and save
*
*/
add_action( 'admin_init', 'optativa_admin' );
function optativa_admin() {
    add_meta_box(
    'optativa_meta_box',
    'Disciplinas-Optativas-Lista Detalhes',
    'display_optativa_meta_box',
    'optativa',
    'normal',
    'high'
    );
}

function display_optativa_meta_box( $optativa ) {
    global $post;    
    $meta = get_post_meta( $post->ID, 'optativa_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="optativa_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'optativa_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'optativa_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>     
        <tr>
            <td style="width: 150px">Arquivo</td>
        <td>
        <input type="text" name="optativa_fields[arquivo]" id="optativa_fields[arquivo]" class="meta-pdf regular-text" value="<?php if (is_array($meta) && isset($meta['arquivo'])) {  echo $meta['arquivo']; } ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="optativa_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
    </table>

    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_optativa_fields_meta' );
function save_optativa_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['optativa_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['optativa_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'optativa_fields', true );
    if (isset($_POST['optativa_fields'])) { //Fix 3
      $new = $_POST['optativa_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'optativa_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'optativa_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR CONCURSO'S
*         Display and save
*
*/
add_action( 'admin_init', 'edital_admin' );
function edital_admin() {
    add_meta_box(
    'edital_meta_box',
    'Detalhes do Edital',
    'display_edital_meta_box',
    'edital',
    'normal',
    'high'
    );
}

function display_edital_meta_box( $edital ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'edital_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="edital_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Assunto</td>
        <td><input type="text" name="edital_fields[assunto]" value="<?php if (is_array($meta) && isset($meta['assunto'])) {  echo $meta['assunto']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'edital_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'edital_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Cronograma</td>
        <td>
        <?php  
        $content = $meta['cronograma'];
        $editor_id = 'edital_fields1' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'edital_fields[cronograma]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Arquivo</td>
        <td>
        <input type="text" name="edital_fields[arquivo]" id="edital_fields[arquivo]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['arquivo'])) {  echo $meta['arquivo']; }  ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
        <tr>
            <td style="width: 150px">Link</td>
        <td><input type="text" name="edital_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="edital_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
    </table>

    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_edital_fields_meta' );
function save_edital_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['edital_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['edital_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'edital_fields', true );
    if (isset($_POST['edital_fields'])) { //Fix 3
      $new = $_POST['edital_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'edital_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'edital_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR EMPREGO'S
*         Display and save
*
*/
add_action( 'admin_init', 'emprego_admin' );
function emprego_admin() {
    add_meta_box(
    'emprego_meta_box',
    'Detalhes do Emprego',
    'display_emprego_meta_box',
    'emprego',
    'normal',
    'high'
    );
}

function display_emprego_meta_box( $emprego ) {
    global $post;  
    
    $meta = get_post_meta( $post->ID, 'emprego_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="emprego_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'emprego_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'emprego_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Data limite de candidatura</td>
        <td><input type="date" name="emprego_fields[data_limite]" value="<?php if (is_array($meta) && isset($meta['data_limite'])) {  echo $meta['data_limite']; } ?>"></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_emprego_fields_meta' );
function save_emprego_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['emprego_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['emprego_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'emprego_fields', true );
    if (isset($_POST['emprego_fields'])) { //Fix 3
      $new = $_POST['emprego_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'emprego_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'emprego_fields', $old );
      }
    }
}



/*         
*         ADD META BOX FOR ESTAGIO'S
*         Display and save
*
*/
add_action( 'admin_init', 'estagio_admin' );
function estagio_admin() {
    add_meta_box(
    'estagio_meta_box',
    'Detalhes do Estágio',
    'display_estagio_meta_box',
    'estagio',
    'normal',
    'high'
    );
}

function display_estagio_meta_box( $estagio ) {
    global $post;    
    $meta = get_post_meta( $post->ID, 'estagio_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="estagio_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'estagio_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'estagio_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Data limite de candidatura</td>
        <td><input type="date" name="estagio_fields[data_limite]" value="<?php if (is_array($meta) && isset($meta['data_limite'])) {  echo $meta['data_limite']; } ?>"></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_estagio_fields_meta' );
function save_estagio_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['estagio_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['estagio_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'estagio_fields', true );
    if (isset($_POST['estagio_fields'])) { //Fix 3
      $new = $_POST['estagio_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'estagio_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'estagio_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR FUNCIONARIO'S
*         Display and save
*
*/
add_action( 'admin_init', 'funcionario_admin' );
function funcionario_admin() {
    add_meta_box(
    'funcionario_meta_box',
    'Detalhes do Funcionário',
    'display_funcionario_meta_box',
    'funcionario',
    'normal',
    'high'
    );
}

function display_funcionario_meta_box( $funcionario ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'funcionario_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="funcionario_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Sala</td>
        <td><input type="text" name="funcionario_fields[sala]" value="<?php if (is_array($meta) && isset($meta['sala'])) {  echo $meta['sala']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Ramal</td>
        <td><input type="text" name="funcionario_fields[ramal]" value="<?php if (is_array($meta) && isset($meta['ramal'])) {  echo $meta['ramal']; } ?>"></td>
        </tr>        
        <tr>
            <td style="width: 150px">Aniversário</td>
        <td><input type="date" name="funcionario_fields[aniversario]" value="<?php if (is_array($meta) && isset($meta['aniversario'])) {  echo $meta['aniversario']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Email</td>
        <td><input type="text" name="funcionario_fields[email]" value="<?php if (is_array($meta) && isset($meta['email'])) {  echo $meta['email']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Função</td>
        <td>
        <?php  
        $content = $meta['funcao'];
        $editor_id = 'funcionario_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'funcionario_fields[funcao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>  
        <tr>
            <td style="width: 150px">Setor/Área</td>
        <td><input type="text" name="funcionario_fields[setor]" value="<?php if (is_array($meta) && isset($meta['setor'])) {  echo $meta['setor']; } ?>"></td>
        </tr> 
        <tr>
            <td style="width: 150px">Data ingresso</td>
        <td><input type="date" name="funcionario_fields[data_ingresso]" value="<?php if (is_array($meta) && isset($meta['data_ingresso'])) {  echo $meta['data_ingresso']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data saída</td>
        <td><input type="date" name="funcionario_fields[data_saida]" value="<?php if (is_array($meta) && isset($meta['data_saida'])) {  echo $meta['data_saida']; } ?>"></td>
        </tr>
        <tr>
    </table>
    <?php
}

add_action( 'save_post', 'save_funcionario_fields_meta' );
function save_funcionario_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['funcionario_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['funcionario_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'funcionario_fields', true );
    if (isset($_POST['funcionario_fields'])) { //Fix 3
      $new = $_POST['funcionario_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'funcionario_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'funcionario_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR HORARIO'S
*         Display and save
*
*/
add_action( 'admin_init', 'horario_admin' );
function horario_admin() {
    add_meta_box(
    'horario_meta_box',
    'Detalhes do Horário Aula',
    'display_horario_meta_box',
    'horario',
    'normal',
    'high'
    );
}

function display_horario_meta_box( $horario ) {
    global $post;     
    $meta = get_post_meta( $post->ID, 'horario_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="horario_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Curso</td>
        <td><input type="text" name="horario_fields[curso]" value="<?php if (is_array($meta) && isset($meta['curso'])) {  echo $meta['curso']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Arquivo</td>
        <td>
        <input type="text" name="horario_fields[arquivo]" id="horario_fields[arquivo]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['arquivo'])) {  echo $meta['arquivo']; }  ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
        <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="horario_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
    </table>
    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_horario_fields_meta' );
function save_horario_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['horario_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['horario_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'horario_fields', true );
    if (isset($_POST['horario_fields'])) { //Fix 3
      $new = $_POST['horario_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'horario_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'horario_fields', $old );
      }
    }
}



/*         
*         ADD META BOX FOR Laboratorio'S
*         Display and save
*
*/
add_action( 'admin_init', 'laboratorio_admin' );
function laboratorio_admin() {
    add_meta_box(
    'laboratorio_meta_box',
    'Detalhes do Laboratório',
    'display_laboratorio_meta_box',
    'laboratorio',
    'normal',
    'high'
    );
}

function display_laboratorio_meta_box( $laboratorio ) {
    global $post;    
    $meta = get_post_meta( $post->ID, 'laboratorio_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="laboratorio_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Sigla</td>
        <td><input type="text" name="laboratorio_fields[sigla]" value="<?php if (is_array($meta) && isset($meta['sigla'])) {  echo $meta['sigla']; } ?>"></td>
        </tr> 


        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'laboratorio_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'laboratorio_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Logomarca</td>
            <td><input type="text" name="laboratorio_fields[logo]" id="laboratorio_fields[logo]" class="meta-image regular-text" value="<?php  if (is_array($meta) && isset($meta['logo'])) {  echo $meta['logo']; }  ?>">
            <input type="button" class="button image-upload" value="Browse">
            </td>
        </tr>
        <tr>
             <td style="width: 150px"> </td>
            <td><img  style="max-height: 150px; float: center; margin: 10px" src="<?php  if (is_array($meta) && isset($meta['logo'])) {  echo $meta['logo']; }  ?>"></td>
        </tr>
        

       <tr>
            <td style="width: 150px">Coordenadores</td>

            <td><div id="coordenadores">
            <?php
                if (is_array($meta) && isset($meta['coordenadores'])) {
                foreach($meta['coordenadores'] as $coordenador) {
            ?>    
            <input type="text" name="laboratorio_fields[coordenadores][]" value="<?php echo $coordenador; ?>">
            <?php
                }
            }
            ?>
            </div></td>
            <td><input type="button" name="add-coordenador" id="add-coordenador" class="button" value="Adicionar"></td>
        </tr>


        <tr>
            <td style="width: 150px">Professores</td>

            <td><div id="professores">
            <?php
                if (is_array($meta) && isset($meta['professores'])) {
                foreach($meta['professores'] as $professor) {
            ?>    
            <input type="text" name="laboratorio_fields[professores][]" value="<?php echo $professor; ?>">
            <?php
                }
            }
            ?>
            </div></td>
            <td><input type="button" name="add-professor" id="add-professor" class="button" value="Adicionar"></td>
        </tr>


        <tr>
            <td style="width: 150px">Sala</td>
        <td><input type="text" name="laboratorio_fields[sala]" value="<?php if (is_array($meta) && isset($meta['sala'])) {  echo $meta['sala']; } ?>"></td>
        </tr>    
        
        <tr>
            <td style="width: 150px">Ramal</td>
        <td><input type="text" name="laboratorio_fields[ramal]" value="<?php if (is_array($meta) && isset($meta['ramal'])) {  echo $meta['ramal']; } ?>"></td>
        </tr>   

        <tr>
            <td style="width: 150px">Foto</td>
            <td><input type="text" name="laboratorio_fields[foto]" id="laboratorio_fields[foto]" class="meta-image regular-text" value="<?php  if (is_array($meta) && isset($meta['foto'])) {  echo $meta['foto']; }  ?>">
            <input type="button" class="button image2-upload" value="Browse">
            </td>
        </tr>
        <tr>
             <td style="width: 150px"> </td>
            <td><img  style="max-height: 150px; float: center; margin: 10px" src="<?php  if (is_array($meta) && isset($meta['foto'])) {  echo $meta['foto']; }  ?>"></td>
        </tr>

        <tr>
            <td style="width: 150px">URL Vídeo</td>
        <td><input type="text" name="laboratorio_fields[url]" value="<?php if (is_array($meta) && isset($meta['url'])) {  echo $meta['url']; } ?>"></td>
        </tr>
        
        <tr>
            <td style="width: 150px">Áreas de Pesquisa</td>
        <td>
        <?php  
        $content = $meta['areas'];
        $editor_id = 'laboratorio_fields2' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'laboratorio_fields[areas]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 

    </table>

      <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>
      <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image2-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>
    <script>
    jQuery(document).ready(function ($) {
        $('#add-professor').click(function(e) {
            $("#professores").append('<td><input type="text" name="laboratorio_fields[professores][]"></td>');
        });
    })
    </script>
    <script>
    jQuery(document).ready(function ($) {
        $('#add-coordenador').click(function(e) {
            $("#coordenadores").append('<td><input type="text" name="laboratorio_fields[coordenadores][]"></td>');
        });
    })
    </script>
    <?php
}

add_action( 'save_post', 'save_laboratorio_fields_meta' );
function save_laboratorio_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['laboratorio_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['laboratorio_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'laboratorio_fields', true );
    if (isset($_POST['laboratorio_fields'])) { //Fix 3
      $new = $_POST['laboratorio_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'laboratorio_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'laboratorio_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR PALESTRA'S
*         Display and save
*
*/
add_action( 'admin_init', 'palestra_admin' );
function palestra_admin() {
    add_meta_box(
    'palestra_meta_box',
    'Detalhes da Palestra',
    'display_palestra_meta_box',
    'palestra',
    'normal',
    'high'
    );
}

function display_palestra_meta_box( $palestra ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'palestra_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="palestra_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Resumo</td>
        <td>
        <?php  
        $content = $meta['resumo'];
        $editor_id = 'palestra_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'palestra_fields[resumo]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Palestrante</td>
        <td><input type="text" name="palestra_fields[palestrante]" value="<?php if (is_array($meta) && isset($meta['palestrante'])) {  echo $meta['palestrante']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Short Bio</td>
        <td>
        <?php  
        $content = $meta['bio'];
        $editor_id = 'palestra_fields2' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'palestra_fields[bio]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Data</td>
        <td><input type="date" name="palestra_fields[data]" value="<?php if (is_array($meta) && isset($meta['data'])) {  echo $meta['data']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Hora</td>
        <td><input type="time" name="palestra_fields[hora]" value="<?php if (is_array($meta) && isset($meta['hora'])) {  echo $meta['hora']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Onde</td>
        <td>
        <?php  
        $content = $meta['onde'];
        $editor_id = 'palestra_fields3' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'palestra_fields[onde]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Professor Envolvido</td>
        <td><input type="text" name="palestra_fields[professor]" value="<?php if (is_array($meta) && isset($meta['professor'])) {  echo $meta['professor']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Arquivo</td>
        <td>
        <input type="text" name="palestra_fields[arquivo]" id="palestra_fields[arquivo]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['arquivo'])) {  echo $meta['arquivo']; }  ?>">
        <input type="button" class="button pdf-upload" value="Browse">
            </td>
        </tr>
    </table>

    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_palestra_fields_meta' );
function save_palestra_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['palestra_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['palestra_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'palestra_fields', true );
    if (isset($_POST['palestra_fields'])) { //Fix 3
      $new = $_POST['palestra_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'palestra_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'palestra_fields', $old );
      }
    }
}






/*         
*         ADD META BOX FOR PREMIAÇÃO'S
*         Display and save
*
*/
add_action( 'admin_init', 'premiacao_admin' );
function premiacao_admin() {
    add_meta_box(
    'premiacao_meta_box',
    'Detalhes da Premiação',
    'display_premiacao_meta_box',
    'premiacao',
    'normal',
    'high'
    );
}

function display_premiacao_meta_box( $premiacao ) {
    global $post;   
    $meta = get_post_meta( $post->ID, 'premiacao_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="premiacao_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'premiacao_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'premiacao_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Data da Premiaçao</td>
        <td><input type="date" name="premiacao_fields[data]" value="<?php if (is_array($meta) && isset($meta['data'])) {  echo $meta['data']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Premiado</td>
        <td><input type="text" name="premiacao_fields[premiado]" value="<?php if (is_array($meta) && isset($meta['premiado'])) {  echo $meta['premiado']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Instituição</td>
        <td><input type="text" name="premiacao_fields[instituicao]" value="<?php if (is_array($meta) && isset($meta['instituicao'])) {  echo $meta['instituicao']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de Expiração</td>
        <td><input type="date" name="premiacao_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>
    </table>


    <?php
}

add_action( 'save_post', 'save_premiacao_fields_meta' );
function save_premiacao_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['premiacao_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['premiacao_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'premiacao_fields', true );
    if (isset($_POST['premiacao_fields'])) { //Fix 3
      $new = $_POST['premiacao_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'premiacao_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'premiacao_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR PROFESSOR'S
*         Display and save
*
*/
add_action( 'admin_init', 'professor_admin' );
function professor_admin() {
    add_meta_box(
    'professor_meta_box',
    'Detalhes da Professor',
    'display_professor_meta_box',
    'professor',
    'normal',
    'high'
    );
}

function display_professor_meta_box( $professor ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'professor_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="professor_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Classe</td>
                <td><select name="professor_fields[classe]" id="professor_fields[classe]">
                    <option value="adjunto" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'adjunto' ); } ?>>Adjunto</option>
                    <option value="associado" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'associado' ); } ?>>Associado</option>
                    <option value="titular" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'titular' ); } ?>>Titular</option>
                    <option value="emerito" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'emerito' ); } ?>>Emérito</option>
                    <option value="voluntario" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'voluntario' ); } ?>>Voluntário</option>
                    <option value="aposentado" <?php if (is_array($meta) && isset($meta['classe'])) { selected( $meta['classe'], 'aposentado' ); } ?>>Aposentado</option> 
                </select></td>
        </tr>
        <tr>
            <td style="width: 150px">Sala</td>
        <td><input type="text" name="professor_fields[sala]" value="<?php if (is_array($meta) && isset($meta['sala'])) {  echo $meta['sala']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Ramal</td>
        <td><input type="text" name="professor_fields[ramal]" value="<?php if (is_array($meta) && isset($meta['ramal'])) {  echo $meta['ramal']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Email</td>
        <td><input type="text" name="professor_fields[email]" value="<?php if (is_array($meta) && isset($meta['email'])) {  echo $meta['email']; } ?>"></td>
        </tr>
       <tr>
            <td style="width: 150px">ID Lattes</td>
        <td><input type="text" name="professor_fields[lattes_id]" value="<?php if (is_array($meta) && isset($meta['lattes_id'])) {  echo $meta['lattes_id']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">ID Google Scholar</td>
        <td><input type="text" name="professor_fields[scholar_id]" value="<?php if (is_array($meta) && isset($meta['scholar_id'])) {  echo $meta['scholar_id']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Bolsa Produtividade</td>
        <td><input type="text" name="professor_fields[produtividade]" value="<?php if (is_array($meta) && isset($meta['produtividade'])) {  echo $meta['produtividade']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Link Página Pessoal</td>
        <td><input type="text" name="professor_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Formação Acadêmica</td>
        <td>
        <?php  
        $content = $meta['formacao'];
        $editor_id = 'professor_fields2' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'professor_fields[formacao]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Áreas de Pesquisa</td>
        <td>
        <?php  
        $content = $meta['area'];
        $editor_id = 'professor_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'professor_fields[area]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Data Aniversário</td>
        <td><input type="date" name="professor_fields[data_aniversario]" value="<?php if (is_array($meta) && isset($meta['data_aniversario'])) {  echo $meta['data_aniversario']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de ingresso</td>
        <td><input type="date" name="professor_fields[data_ingresso]" value="<?php if (is_array($meta) && isset($meta['data_ingresso'])) {  echo $meta['data_ingresso']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Data de Saída</td>
        <td><input type="date" name="professor_fields[data_saida]" value="<?php if (is_array($meta) && isset($meta['data_saida'])) {  echo $meta['data_saida']; } ?>"></td>
        </tr>
    </table>


    <?php
}

add_action( 'save_post', 'save_professor_fields_meta' );
function save_professor_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['professor_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['professor_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'professor_fields', true );
    if (isset($_POST['professor_fields'])) { //Fix 3
      $new = $_POST['professor_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'professor_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'professor_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR PROJETO'S
*         Display and save
*
*/
add_action( 'admin_init', 'projeto_admin' );
function projeto_admin() {
    add_meta_box(
    'projeto_meta_box',
    'Detalhes do Projeto',
    'display_projeto_meta_box',
    'projeto',
    'normal',
    'high'
    );
}

function display_projeto_meta_box( $projeto ) {
    global $post;   
    $meta = get_post_meta( $post->ID, 'projeto_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="projeto_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>

        <tr>
            <td style="width: 150px">Descrição Pública</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'projeto_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Sigla</td>
        <td><input type="text" name="projeto_fields[sigla]" value="<?php if (is_array($meta) && isset($meta['sigla'])) {  echo $meta['sigla']; } ?>"></td>
        </tr> 
       <tr>
            <td style="width: 150px">Linha de Pesquisa</td>

            <td><div id="linhas">
            <?php
                if (is_array($meta) && isset($meta['linhas'])) {
                foreach($meta['linhas'] as $linha) {
            ?>    
            <input type="text" name="projeto_fields[linhas][]" value="<?php echo $linha; ?>">
            <?php
                }
            }
            ?>
            </div></td>
            <td><input type="button" name="add-linha" id="add-linha" class="button" value="Adicionar"></td>
        </tr>

        <tr>
            <td style="width: 150px">Início</td>
        <td><input type="date" name="projeto_fields[inicio]" value="<?php if (is_array($meta) && isset($meta['inicio'])) {  echo $meta['inicio']; } ?>"></td>
        </tr>

        <tr>
            <td style="width: 150px">Término</td>
        <td><input type="date" name="projeto_fields[termino]" value="<?php if (is_array($meta) && isset($meta['termino'])) {  echo $meta['termino']; } ?>"></td>
        </tr>    
        <tr>
            <td style="width: 150px">Coordenador</td>
        <td><input type="text" name="projeto_fields[coordenador]" value="<?php if (is_array($meta) && isset($meta['coordenador'])) {  echo $meta['coordenador']; } ?>"></td>
        </tr>    
        <tr>
            <td style="width: 150px">Integrantes do DCC</td>

            <td><div id="professores">
            <?php
                if (is_array($meta) && isset($meta['professores'])) {
                foreach($meta['professores'] as $professor) {
            ?>    
            <input type="text" name="projeto_fields[professores][]" value="<?php echo $professor; ?>">
            <?php
                }
            }
            ?>
            </div></td>
            <td><input type="button" name="add-professor" id="add-professor" class="button" value="Adicionar"></td>
        </tr>
        <tr>
            <td style="width: 150px">Agência</td>
        <td>
        <?php  
        $content = $meta['agencia'];
        $editor_id = 'projeto_fields2' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[agencia]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Programa</td>
        <td>
        <?php  
        $content = $meta['programa'];
        $editor_id = 'projeto_fields3' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[programa]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Natureza</td>
        <td>
        <?php  
        $content = $meta['natureza'];
        $editor_id = 'projeto_fields4' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[natureza]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Situação</td>
        <td>
        <?php  
        $content = $meta['situacao'];
        $editor_id = 'projeto_fields5' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[situacao]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Processo</td>
        <td>
        <?php  
        $content = $meta['processo'];
        $editor_id = 'projeto_fields6' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[processo]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Id Projeto DCC</td>
        <td><input type="text" name="projeto_fields[id]" value="<?php if (is_array($meta) && isset($meta['id'])) {  echo $meta['id']; } ?>"></td>
        </tr>  
        <tr>
            <td style="width: 150px">Resolução da Câmara</td>
        <td>
        <?php  
        $content = $meta['resolucao'];
        $editor_id = 'projeto_fields7' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'projeto_fields[resolucao]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 

    </table>

      
    <script>
    jQuery(document).ready(function ($) {
        $('#add-professor').click(function(e) {
            $("#professores").append('<td><input type="text" name="projeto_fields[professores][]"></td>');
        });
    })
    </script>
    <script>
    jQuery(document).ready(function ($) {
        $('#add-linha').click(function(e) {
            $("#linhas").append('<td><input type="text" name="projeto_fields[linhas][]"></td>');
        });
    })
    </script>
    <?php
}

add_action( 'save_post', 'save_projeto_fields_meta' );
function save_projeto_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['projeto_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['projeto_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'projeto_fields', true );
    if (isset($_POST['projeto_fields'])) { //Fix 3
      $new = $_POST['projeto_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'projeto_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'projeto_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR PUBLICAÇÃO'S
*         Display and save
*
*/
add_action( 'admin_init', 'publicacao_admin' );
function publicacao_admin() {
    add_meta_box(
    'publicacao_meta_box',
    'Detalhes da Publicação',
    'display_publicacao_meta_box',
    'publicacao',
    'normal',
    'high'
    );
}

function display_publicacao_meta_box( $publicacao ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'publicacao_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="publicacao_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'publicacao_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'publicacao_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Autor</td>
        <td><input type="text" name="publicacao_fields[autor]" value="<?php if (is_array($meta) && isset($meta['autor'])) {  echo $meta['autor']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Foto</td>
            <td><input type="text" name="publicacao_fields[capa]" id="publicacao_fields[capa]" class="meta-image regular-text" value="<?php  if (is_array($meta) && isset($meta['capa'])) {  echo $meta['capa']; }  ?>">
            <input type="button" class="button image-upload" value="Browse">
            </td>
        </tr>
        <tr>
             <td style="width: 150px"> </td>
            <td><img  style="max-height: 150px; float: center; margin: 10px" src="<?php  if (is_array($meta) && isset($meta['capa'])) {  echo $meta['capa']; }  ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Editora</td>
        <td><input type="text" name="publicacao_fields[editora]" value="<?php if (is_array($meta) && isset($meta['editora'])) {  echo $meta['editora']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Edição</td>
        <td><input type="text" name="publicacao_fields[edicao]" value="<?php if (is_array($meta) && isset($meta['edicao'])) {  echo $meta['edicao']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Tipo</td>
                <td><select name="publicacao_fields[tipo]" id="publicacao_fields[tipo]">
                    <option value="livro" <?php if (is_array($meta) && isset($meta['tipo'])) { selected( $meta['tipo'], 'livro' ); } ?>>Livro</option>
                    <option value="capitulo" <?php if (is_array($meta) && isset($meta['tipo'])) { selected( $meta['tipo'], 'capitulo' ); } ?>>Capítulo</option>
                </select></td>
        </tr>
        <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>      
    </table>


    <?php
}

add_action( 'save_post', 'save_publicacao_fields_meta' );
function save_publicacao_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['publicacao_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['publicacao_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'publicacao_fields', true );
    if (isset($_POST['publicacao_fields'])) { //Fix 3
      $new = $_POST['publicacao_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'publicacao_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'publicacao_fields', $old );
      }
    }
}


/*         
*         ADD META BOX FOR PUBLICAÇÃO'S
*         Display and save
*
*/
add_action( 'admin_init', 'resolucao_admin' );
function resolucao_admin() {
    add_meta_box(
    'resolucao_meta_box',
    'Detalhes da Publicação',
    'display_resolucao_meta_box',
    'resolucao',
    'normal',
    'high'
    );
}

function display_resolucao_meta_box( $resolucao ) {
    global $post;   
    $meta = get_post_meta( $post->ID, 'resolucao_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="resolucao_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Data</td>
        <td><input type="date" name="resolucao_fields[data]" value="<?php if (is_array($meta) && isset($meta['data'])) {  echo $meta['data']; } ?>"></td>
        </tr>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td style="width: 500px">
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'resolucao_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'resolucao_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
          <td style="width: 150px">Arquivo (PDF)</td>
          <td>
            <input type="text" name="resolucao_fields[pdf]" id="ata_fields[pdf]" class="meta-pdf regular-text" value="<?php  if (is_array($meta) && isset($meta['pdf'])) {  echo $meta['pdf']; }  ?>">
            <input type="button" class="button pdf-upload" value="Browse">
          </td>
        </tr>
    </table>

    <script>
    jQuery(document).ready(function ($) {
        // Instantiates the variable that holds the media library frame.
        var meta_pdf_frame;
        // Runs when the image button is clicked.
        $('.pdf-upload').click(function (e) {
            // Prevents the default action from occuring.
            e.preventDefault();
            var meta_pdf = $(this).parent().children('.meta-pdf');
            // If the frame already exists, re-open it.
            if (meta_pdf_frame) {
                meta_pdf_frame.open();
                return;
            }
            // Sets up the media library frame
            meta_pdf_frame = wp.media.frames.meta_pdf_frame = wp.media({
            title: meta_pdf.title,
                button: {
                text: meta_pdf.button
            }
            });
            // Runs when an pdf is selected.
            meta_pdf_frame.on('select', function () {
                // Grabs the attachment selection and creates a JSON representation of the model.
                var media_attachment = meta_pdf_frame.state().get('selection').first().toJSON();
                // Sends the attachment URL to our custom pdf input field.
                meta_pdf.val(media_attachment.url);
            });
            // Opens the media library frame.
            meta_pdf_frame.open();
        });
    });
    </script>
    <?php
}

add_action( 'save_post', 'save_resolucao_fields_meta' );
function save_resolucao_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['resolucao_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['resolucao_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'resolucao_fields', true );
    if (isset($_POST['resolucao_fields'])) { //Fix 3
      $new = $_POST['resolucao_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'resolucao_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'resolucao_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR PUBLICAÇÃO'S
*         Display and save
*
*/
add_action( 'admin_init', 'video_admin' );
function video_admin() {
    add_meta_box(
    'video_meta_box',
    'Detalhes da Publicação',
    'display_video_meta_box',
    'video',
    'normal',
    'high'
    );
}

function display_video_meta_box( $video ) {
    global $post;  
    $meta = get_post_meta( $post->ID, 'video_fields', true );?>
    <style>
        tr {
            width: 1600px;
        }
        td {
            width: 100%;
        }
        select {
            width: 150px;
        }
        input[type="date"] {
            width: 150px;
        }
        input[type="button"] {
            width: 150px;
        }
        input[type="text"] {
            width: 600px;
        }
        .title {
            width: 150px;
        }
    </style>
    <input type="hidden" name="video_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'video_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'video_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr>
        <tr>
            <td style="width: 150px">Link</td>
        <td><input type="text" name="video_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>

        <tr>
            <td style="width: 150px">Categoria</td>
                <td><select name="video_fields[categoria]" id="video_fields[categoria]">
                    <option value="entrevista" <?php if (is_array($meta) && isset($meta['categoria'])) { selected( $meta['categoria'], 'entrevista' ); } ?>>Entrevista</option>
                    <option value="institucional" <?php if (is_array($meta) && isset($meta['categoria'])) { selected( $meta['categoria'], 'institucional' ); } ?>>Institucional</option>
                    <option value="apresentacao" <?php if (is_array($meta) && isset($meta['categoria'])) { selected( $meta['categoria'], 'apresentacao' ); } ?>>Apresentação</option>
                </select></td>
        </tr>   
    </table>


    <?php
}

add_action( 'save_post', 'save_video_fields_meta' );
function save_video_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['video_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['video_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'video_fields', true );
    if (isset($_POST['video_fields'])) { //Fix 3
      $new = $_POST['video_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'video_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'video_fields', $old );
      }
    }
}

/*         
*         ADD META BOX FOR NOTICIA'S
*         Display and save
*
*/
add_action( 'admin_init', 'noticia_admin' );
function noticia_admin() {
    add_meta_box(
    'noticia_meta_box',
    'Detalhes da Notícia',
    'display_noticia_meta_box',
    'noticia',
    'normal',
    'high'
    );
}

function display_noticia_meta_box( $noticia ) {
    global $post;  
    
    $meta = get_post_meta( $post->ID, 'noticia_fields', true );?>

    <input type="hidden" name="noticia_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <table>
        <tr>
            <td style="width: 150px">Olho</td>
        <td>
        <?php  
        $content = $meta['olho'];
        $editor_id = 'noticia_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'noticia_fields[olho]',
            'textarea_rows' => 5,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Descrição</td>
        <td>
        <?php  
        $content = $meta['descricao'];
        $editor_id = 'noticia_fields' ;
        wp_editor( $content, $editor_id, array(
            'wpautop'       => false,
            'media_buttons' => false,
            'textarea_name' => 'noticia_fields[descricao]',
            'textarea_rows' => 10,
            'tabindex' => '',
            'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the <style> tags, can use "scoped".
            'editor_class' => '', // add extra class(es) to the editor textarea
            'teeny' => false, // output the minimal editor config used in Press This
            'dfw' => false, // replace the default fullscreen with DFW (supported on the front-end in WordPress 3.4)
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => true
        ) );  
        ?></td>
        </tr> 
        <tr>
            <td style="width: 150px">Link</td>
        <td><input type="text" name="noticia_fields[link]" value="<?php if (is_array($meta) && isset($meta['link'])) {  echo $meta['link']; } ?>"></td>
        </tr> 
        <tr>
            <td style="width: 150px">Tipo</td>
                <td><select name="noticia_fields[tipo]" id="noticia_fields[tipo]">
                    <option value="destaque" <?php if (is_array($meta) && isset($meta['tipo'])) { selected( $meta['tipo'], 'destaque' ); } ?>>Destaque</option>
                    <option value="sala-café" <?php if (is_array($meta) && isset($meta['tipo'])) { selected( $meta['tipo'], 'sala-café' ); } ?>>Sala Café</option>
                    <option value="alunos" <?php if (is_array($meta) && isset($meta['tipo'])) { selected( $meta['tipo'], 'alunos' ); } ?>>Alunos</option>
                </select></td>
        </tr>   
        <tr>
            <td style="width: 150px">Professores Envolvidos</td>

            <td><div id="professores">
            <?php
                if (is_array($meta) && isset($meta['professores'])) {
                foreach($meta['professores'] as $professor) {
            ?>    
            <input type="text" name="noticia_fields[professores][]" value="<?php echo $professor; ?>">
            <?php
                }
            }
            ?>
            </div></td>
            <td><input type="button" name="add-professor" id="add-professor" class="button" value="Adicionar"></td>
        </tr>
         <tr>
            <td style="width: 150px">Data de expiração</td>
        <td><input type="date" name="noticia_fields[data_exp]" value="<?php if (is_array($meta) && isset($meta['data_exp'])) {  echo $meta['data_exp']; } ?>"></td>
        </tr>        

    </table>

 
    <script>
    jQuery(document).ready(function ($) {
        $('#add-professor').click(function(e) {
            $("#professores").append('<td><input type="text" name="noticia_fields[professores][]"></td>');
        });
    })
    </script>
    <?php
}

add_action( 'save_post', 'save_noticia_fields_meta' );
function save_noticia_fields_meta( $post_id ) {   
  // verify nonce
  if ( isset($_POST['noticia_meta_box_nonce']) 
      && !wp_verify_nonce( $_POST['noticia_meta_box_nonce'], basename(__FILE__) ) ) {
      return $post_id; 
    }
  // check autosave
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $post_id;
  }
  // check permissions
  if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
  
  $old = get_post_meta( $post_id, 'noticia_fields', true );
    if (isset($_POST['noticia_fields'])) { //Fix 3
      $new = $_POST['noticia_fields'];
      if ( $new && $new !== $old ) {
        update_post_meta( $post_id, 'noticia_fields', $new );
      } elseif ( '' === $new && $old ) {
        delete_post_meta( $post_id, 'noticia_fields', $old );
      }
    }
}