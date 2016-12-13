<?php
//register thumbnails
    if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' ); 
    }
    //register nav menus
    register_nav_menus(array(
        'nav-menu'=>'Nav menu'
    ));

    //register custom header
    $custom_header = array(
          'default-image'          => '',
          'random-default'         => false,
          'width'                  => 0,
          'height'                 => 0,
          'flex-height'            => false,
          'flex-width'             => false,
          'default-text-color'     => '',
          'header-text'            => true,
          'uploads'                => true,
          'wp-head-callback'       => '',
          'admin-head-callback'    => '',
          'admin-preview-callback' => '',);
    add_theme_support( 'custom-header', $custom_header );

    function incrustar_css(){
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer
        wp_enqueue_style('bootstrap-css', get_template_directory_uri(). '/css/bootstrap.min.css');
        wp_enqueue_style('NAG-site', get_stylesheet_uri());
        wp_enqueue_style('NAG-Mobile', get_template_directory_uri(). '/css/stylesheet-mobile.css');
        wp_enqueue_style('fonts-css', get_template_directory_uri(). '/fonts/theano_raleway/stylesheet.css');
        wp_enqueue_style('awesome-css', get_template_directory_uri(). '/css/font-awesome.min.css');
        
    }
    
    add_action( 'wp_enqueue_scripts', 'incrustar_css' );
    //jquery

    function incrustar_estilos(){
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer
        wp_enqueue_script('jq', get_stylesheet_directory_uri(). '/js/jquery-1.11.3.js');
        wp_enqueue_script('boostrap-js', get_stylesheet_directory_uri(). '/js/bootstrap.min.js');
        wp_enqueue_script('scripts-js', get_stylesheet_directory_uri(). '/js/scripts.js');
    }

    add_action( 'wp_enqueue_scripts', 'incrustar_estilos' );

    /**
     * This is a modification of image_downsize() function in wp-includes/media.php
     * we will remove all the width and height references, therefore the img tag 
     * will not add width and height attributes to the image sent to the editor.
     * 
     * @param bool false No height and width references.
     * @param int $id Attachment ID for image.
     * @param array|string $size Optional, default is 'medium'. Size of image, either array or string.
     * @return bool|array False on failure, array on success.
     */
    function myprefix_image_downsize( $value = false, $id, $size ) {
        if ( !wp_attachment_is_image($id) )
            return false;

        $img_url = wp_get_attachment_url($id);
        $is_intermediate = false;
        $img_url_basename = wp_basename($img_url);

        // try for a new style intermediate size
        if ( $intermediate = image_get_intermediate_size($id, $size) ) {
            $img_url = str_replace($img_url_basename, $intermediate['file'], $img_url);
            $is_intermediate = true;
        }
        elseif ( $size == 'thumbnail' ) {
            // Fall back to the old thumbnail
            if ( ($thumb_file = wp_get_attachment_thumb_file($id)) && $info = getimagesize($thumb_file) ) {
                $img_url = str_replace($img_url_basename, wp_basename($thumb_file), $img_url);
                $is_intermediate = true;
            }
        }

        // We have the actual image size, but might need to further constrain it if content_width is narrower
        if ( $img_url) {
            return array( $img_url, 0, 0, $is_intermediate );
        }
        return false;
    }

    /* Remove the height and width refernces from the image_downsize function.
     * We have added a new param, so the priority is 1, as always, and the new 
     * params are 3.
     */
    add_filter( 'image_downsize', 'myprefix_image_downsize', 1, 3 );
?>