<?php

/*

// Widget Area

add_action( 'widgets_init', 'my_register_sidebars' );
 
function my_register_sidebars () {
    register_sidebar(array(
    	'name' => __( 'Example 1' ),
        'id' => 'example_1',
        'description' => __( "Widgets in this area will be shown ..." ),
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __( 'Example 2' ),
        'id' => 'example_2',
        'description' => __( "Widgets in this area will be shown ...." ),
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    

};


// Widget 


class exampleWidget extends WP_Widget
{
  function exampleWidget()
  {
    $widget_ops = array('classname' => 'exampleWidget', 'description' => 'Description here...' );
    $this->WP_Widget('exampleWidget', 'Raison - Adds Switch', $widget_ops);
  }

  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }

  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }

  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);

    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);

    if (!empty($title))
      echo $before_title . $title . $after_title;;

    // widget code here
	get_template_part( 'includes/widget/widget-name' );


    echo $after_widget;
  }

}
add_action( 'widgets_init', create_function('', 'return register_widget("exampleWidget");') );


*/



?>