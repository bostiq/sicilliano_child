<?php
/**
 * Functions - Child theme custom functions
 */


/************************************************************************************************
***************** CAUTION: do not remove or edit anything within this section ******************/

/**
 * Makes the Divi Children Engine available for the child theme.
 * Do not remove this, your child theme will not work.
 */
require_once('divi-children-engine/divi_children_engine.php');

/***********************************************************************************************/


/*- You can include any custom code for your child theme below this line -*/
// Logo

function my_login_logo() { ?>
  <style type="text/css">
      #login h1 a, .login h1 a {
	      background-image: url(https://stage.siciliano.photo/wp-content/themes/siciliano_divi_child/img/SicilianoCircle_512.jpg);
	      height: 150px;
	      width: 150px;
	      background-size: 170px 170px;
	      background-repeat: no-repeat;
	      border: 10px #fff solid;
}
     
      }
  </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// END LOGO

// Attach CSS to login Page

function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login-index.css' );
  wp_enqueue_style( 'custom-fonts', get_stylesheet_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


// END CSS

// // "PROJECT POST TYPE IN PERMALINKS"
// register_taxonomy(
//   'project_category',
//   'project',
//   array(
//       'rewrite' => array( 'slug' => 'projects', 'with_front' => false ),
//       // your other args...
//   )
// );

// register_post_type(
//   'project',
//   array(
//       'rewrite' => array( 'slug' => 'projects/%project_category%', 'with_front' => false ),
//       'has_archive' => 'shows',
//       // your other args...
//   )
// );


// function wpa_sproject_permalinks( $post_link, $post ){
//   if ( is_object( $post ) && $post->post_type == 'projects' ){
//       $terms = wp_get_object_terms( $post->ID, 'project_category' );
//       if( $terms ){
//           return str_replace( '%projects_category%' , $terms[0]->slug , $post_link );
//       }
//   }
//   return $post_link;
// }
// add_filter( 'post_type_link', 'wpa_projects_permalinks', 1, 2 );

// ?>