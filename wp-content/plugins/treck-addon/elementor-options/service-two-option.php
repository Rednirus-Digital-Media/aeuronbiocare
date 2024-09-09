<?php

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'treck-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'layout_two_sec_title',
    [
        'label' => __('Section Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'treck-addon'),
    ]
);

treck_elementor_heading_option($this, 'Section Title', 'h2', 'layout_two');

$this->add_control(
    'layout_two_sec_sub_title',
    [
        'label' => __('Section Sub Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'treck-addon'),
    ]
);

treck_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_two');

$this->add_control(
    'layout_two_summary',
    [
        'label' => __('Summary Text', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Summary Text', 'treck-addon'),
    ]
);

$layout_two_service = new \Elementor\Repeater();

$layout_two_service->add_control(
    'title',
    [
        'label' => __('Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Awesome Title', 'treck-addon'),
        'label_block' => true,
    ]
);

treck_elementor_heading_option($layout_two_service, 'Service Title', 'h3', 'layout_two');


$layout_two_service->add_control(
    'url',
    [
        'label' => __('Url', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'treck-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => false,
        ],
    ]
);

$layout_two_service->add_control(
    'text',
    [
        'label' => __('Text', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => __('Default Text', 'treck-addon'),
        'label_block' => true,
    ]
);

$layout_two_service->add_control(
    'url_icon',
    [
        'label' => __('Url Icon', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-up-right',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_two_service->add_control(
    'hover_url_icon',
    [
        'label' => __('Hover Url Icon', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-down',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_two_service->add_control(
    'image',
    [
        'label' => __('Image', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_two_service->add_control(
    'shape',
    [
        'label' => __('Shape', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_two_service->add_control(
    'icon',
    [
        'label' => __('Icon On Hover', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->add_control(
    'layout_two_service_items',
    [
        'label' => __('Service Items', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_service->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
