<?php
/**
 * Adds Searchocl_Widget widget.
 */
class Searchocl_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'searchocl_widget', // Base ID
            esc_html__('Search OCL', 'so_domain'), // Name
            array( 'description' => esc_html__('Widget to search OCL', 'so_domain'), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (! empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        echo '<div class="search-container">
    <form class="form-inline" action="https://www.openconceptlab.org/search/">
      <input type="text" placeholder="Search OCL.." name="q">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>';
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $title = ! empty($instance['title']) ? $instance['title'] : esc_html__('Search OCL', 'so_domain'); ?>
<!-- TITLE -->
    <p>
		<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
      <?php esc_attr_e('Title:', 'so_domain'); ?>
    </label>
      <input
      class="widefat"
      id="<?php echo esc_attr($this->get_field_id('title')); ?>"
      name="<?php echo esc_attr($this->get_field_name('title')); ?>"
      type="text"
      value="<?php echo esc_attr($title); ?>">
		</p>
		<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (! empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
} // class Foo_Widget
