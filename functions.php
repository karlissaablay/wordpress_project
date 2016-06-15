<?php
// EXTRACT MASTERSLIDER SHORTCODE
if ( ! function_exists( 'extracted_shortcode' ) ) {
  function extracted_shortcode(){
  	global $post;
  	if($post) {
  		$pattern = get_shortcode_regex();
  		preg_match('/'.$pattern.'/s', $post->post_content, $matches);
  		if( $matches ) :
  			if (is_array($matches) && $matches[2] == 'masterslider') {
  			   $shortcode = $matches[0];
  			   echo do_shortcode($shortcode);
  			}
  		endif; //$matches
  	} // endif $post
  }// end func. icon_shortcode
}
add_action( 'init', 'extracted_shortcode' );

// REMOVE SHORTCODES FROM THE_CONTENT
function remove_shortcode_from_index($content) {
  $content = strip_shortcodes( $content );
  return $content;
}
add_filter('the_content', 'remove_shortcode_from_index');

?>
