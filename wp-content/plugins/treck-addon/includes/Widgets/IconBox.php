<?php

namespace Layerdrops\Treck\Widgets;


class IconBox extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'treck-icon-box';
    }

    public function get_title()
    {
        return __('Icon Box', 'treck-addon');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['treck-category'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout', 'treck-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout_type',
            [
                'label' => __('Select Layout', 'treck-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'layout_one',
                'options' => [
                    'layout_one' => __('Layout One', 'treck-addon'),
                    'layout_two' => __('Layout Two', 'treck-addon'),
                    'layout_three' => __('Layout Three', 'treck-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include treck_get_elementor_option('icon-box-one-option.php');
        include treck_get_elementor_option('icon-box-two-option.php');
        include treck_get_elementor_option('icon-box-three-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'treck-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        treck_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .coaching-details__hover-title h3,{{WRAPPER}} .coaching-details__why-title h3,{{WRAPPER}} .visa-details__visa-process-list li .title p,{{WRAPPER}} .countries-details__points li .text p a', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include treck_get_template('icon-box-one.php');
        include treck_get_template('icon-box-two.php');
        include treck_get_template('icon-box-three.php');
    }
}
