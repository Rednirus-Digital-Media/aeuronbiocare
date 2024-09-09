<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'treck-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Awesome Title', 'treck-addon'),
    ]
);

treck_elementor_heading_option($this, 'Section Title', 'h2', 'layout_one');


$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Awesome Sub Title', 'treck-addon'),
    ]
);

treck_elementor_heading_option($this, 'Section Sub Title', 'span', 'layout_one');


$this->add_control(
    'visa_one_btn_hr',
    [
        'type' => \Elementor\Controls_Manager::DIVIDER,
    ]
);

$layout_one_visa = new \Elementor\Repeater();

$layout_one_visa->add_control(
    'icon',
    [
        'label' => __('Icon', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-tourist',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_one_visa->add_control(
    'title',
    [
        'label' => __('Title', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '2',
        'default' => __('Awesome Title', 'treck-addon'),
        'label_block' => true,
    ]
);

treck_elementor_heading_option($layout_one_visa, 'Service Title', 'h3', 'layout_one');


$layout_one_visa->add_control(
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

$layout_one_visa->add_control(
    'tag_line',
    [
        'label' => __('Tag Line', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => __('Default Text', 'treck-addon'),
        'label_block' => true,
    ]
);

$layout_one_visa->add_control(
    'text',
    [
        'label' => __('Text', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'rows' => '3',
        'default' => __('Default Text', 'treck-addon'),
        'label_block' => true,
    ]
);

$layout_one_visa->add_control(
    'image',
    [
        'label' => __('Image', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$layout_one_visa->add_control(
    'hover_image',
    [
        'label' => __('Hover Image', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);


$this->add_control(
    'layout_one_visa_items',
    [
        'label' => __('Visa Items', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_visa->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'layout_one_bg_image',
    [
        'label' => __('Background Image', 'treck-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);


$this->end_controls_section();
