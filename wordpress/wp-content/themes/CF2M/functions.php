<?php


function cf2m_init_theme(){
    //Support des images mises en avant 
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cf2m_init_theme');

// Création de l'URL de l'image mis en avant 
function cf2m_URL_image_en_avant($data) {
    $image_id = $data->data['featured_media'];
    $image_url = wp_get_attachment_image_src($image_id, 'medium large');
    if ($image_url) {
        $data->data('Image_en_avant') = $image_url[0];
    }

    return $data;

}
add_filter('rest_prepare_temoignage', 'cf2m_URL_image_en_avant', 10, 1);


// Ajouter un nouveau type de données : Projet
function ajouterType_Temoignages() {
	$labels = array(
		'name' => 'Témoignages',
		'singular_name' => 'Témoignage',
		'add_new' => 'Ajouter un témoignage',
		'add_new_item' => 'Ajouter un témoignage',
		'not_found' => 'Aucun témoignage trouvé',
		'all_items' => 'Tous les témoignages',
		'menu_name' => 'Témoignages'
	);
	$arguments = array(
		'label' => 'Témoignage',
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'menu_position' => 40,
		'menu_icon' => 'dashicons-open-folder'
	);
	register_post_type('temoignage', $arguments);
}
add_action('init','ajouterType_Temoignages');