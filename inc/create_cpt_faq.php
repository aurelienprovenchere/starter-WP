<?php
// add_action('init','create_faq_slide');
function create_faq_slide()
{
  $post_type = "question";
  $labels = array(
        'name'               => 'Questions',
        'singular_name'      => 'Question',
        'all_items'          => 'Toutes les questions',
        'add_new'            => 'Ajouter une question',
        'add_new_item'       => 'Ajouter une question',
        'edit_item'          => "Modifier la question",
        'new_item'           => 'Nouvelle question',
        'view_item'          => "Voir la question",
        'search_items'       => 'Trouver la question',
        'not_found'          => 'No result',
        'not_found_in_trash' => 'No result',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Questions',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-editor-help',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
    $taxonomy = "faq_category";
    $object_type = array("question");
    $args = array(
          'label' => __( 'Catégorie' ),
          'rewrite' => array( 'slug' => 'faqcat' ),
          'hierarchical' => true,
      );
    register_taxonomy( $taxonomy, $object_type, $args );
}
