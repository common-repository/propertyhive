<?php
if (!defined('ABSPATH')) {
    exit;
}

class Divi_Property_Meta_Widget extends ET_Builder_Module
{
    public $slug       = 'et_pb_property_meta_widget';
    public $vb_support = 'partial';

    public function init() {
        $this->name = esc_html__( 'Property Meta', 'propertyhive' );
        $this->icon = '&';
    }

    public function get_fields()
    {
        $fields = array();

        return $fields;
    }

    public function render( $attrs, $content, $render_slug )
    {
        $post_id = get_the_ID();

        $property = new PH_Property($post_id);

        if ( !isset($property->id) ) {
            return;
        }

        ob_start();

        propertyhive_template_single_meta();

        return $this->_render_module_wrapper( ob_get_clean(), $render_slug );
    }
}