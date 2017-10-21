<?php
add_action('vc_before_init', 'ftc_integrate_with_vc');

function ftc_integrate_with_vc() {

    if (!function_exists('vc_map')) {
        return;
    }

    /*     * ******************** Content Shortcodes ************************** */
    /*     * * FTC Features ** */
    vc_map(array(
        'name' => esc_html__('FTC Feature', 'weddingshop'),
        'base' => 'ftc_feature',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Style', 'weddingshop')
                , 'param_name' => 'style'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Horizontal', 'weddingshop') => 'feature-horizontal'
                    , esc_html__('Vertical', 'weddingshop') => 'feature-vertical'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Icon class', 'weddingshop')
                , 'param_name' => 'class_icon'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Use FontAwesome. Ex: fa-home', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Style icon', 'weddingshop')
                , 'param_name' => 'style_icon'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Default', 'weddingshop') => 'icon-default'
                    , esc_html__('Small', 'weddingshop') => 'icon-small'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'attach_image'
                , 'heading' => esc_html__('Image Thumbnail', 'weddingshop')
                , 'param_name' => 'img_id'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
                , 'dependency' => array('element' => 'style', 'value' => array('feature-vertical'))
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Image Thumbnail URL', 'weddingshop')
                , 'param_name' => 'img_url'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Input external URL instead of image from library', 'weddingshop')
                , 'dependency' => array('element' => 'style', 'value' => array('feature-vertical'))
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Feature title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textarea'
                , 'heading' => esc_html__('Short description', 'weddingshop')
                , 'param_name' => 'excerpt'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link', 'weddingshop')
                , 'param_name' => 'link'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Target', 'weddingshop')
                , 'param_name' => 'target'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('New Window Tab', 'weddingshop') => '_blank'
                    , esc_html__('Self', 'weddingshop') => '_self'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Extra class', 'weddingshop')
                , 'param_name' => 'extra_class'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Blogs ** */
    vc_map(array(
        'name' => esc_html__('FTC Blogs', 'weddingshop'),
        'base' => 'ftc_blogs',
        'base' => 'ftc_blogs',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Layout', 'weddingshop')
                , 'param_name' => 'layout'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Grid', 'weddingshop') => 'grid'
                    , esc_html__('Slider', 'weddingshop') => 'slider'
                    , esc_html__('Masonry', 'weddingshop') => 'masonry'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => array(
                    '1' => '1'
                    , '2' => '2'
                    , '3' => '3'
                    , '4' => '4'
                )
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Posts', 'weddingshop')
            )
            , array(
                'type' => 'ftc_category'
                , 'heading' => esc_html__('Categories', 'weddingshop')
                , 'param_name' => 'categories'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
                , 'class' => 'post_cat'
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order by', 'weddingshop')
                , 'param_name' => 'orderby'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('None', 'weddingshop') => 'none'
                    , esc_html__('ID', 'weddingshop') => 'ID'
                    , esc_html__('Date', 'weddingshop') => 'date'
                    , esc_html__('Name', 'weddingshop') => 'name'
                    , esc_html__('Title', 'weddingshop') => 'title'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order', 'weddingshop')
                , 'param_name' => 'order'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Descending', 'weddingshop') => 'DESC'
                    , esc_html__('Ascending', 'weddingshop') => 'ASC'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show post title', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show thumbnail', 'weddingshop')
                , 'param_name' => 'show_thumbnail'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show author', 'weddingshop')
                , 'param_name' => 'show_author'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show comment', 'weddingshop')
                , 'param_name' => 'show_comment'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show date', 'weddingshop')
                , 'param_name' => 'show_date'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show post excerpt', 'weddingshop')
                , 'param_name' => 'show_excerpt'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show read more button', 'weddingshop')
                , 'param_name' => 'show_readmore'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Number of words in excerpt', 'weddingshop')
                , 'param_name' => 'excerpt_words'
                , 'admin_label' => false
                , 'value' => '16'
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show load more button', 'weddingshop')
                , 'param_name' => 'show_load_more'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Load more button text', 'weddingshop')
                , 'param_name' => 'load_more_text'
                , 'admin_label' => false
                , 'value' => 'Show more'
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => '30'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Desktop small items', 'weddingshop')
                , 'param_name' => 'desksmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 991px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet items', 'weddingshop')
                , 'param_name' => 'tablet_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 768px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet mini items', 'weddingshop')
                , 'param_name' => 'tabletmini_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 640px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile items', 'weddingshop')
                , 'param_name' => 'mobile_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 480px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile small items', 'weddingshop')
                , 'param_name' => 'mobilesmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 0px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Button ** */
    vc_map(array(
        'name' => esc_html__('FTC Button', 'weddingshop'),
        'base' => 'ftc_button',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Text', 'weddingshop')
                , 'param_name' => 'content'
                , 'admin_label' => true
                , 'value' => 'Button text'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link', 'weddingshop')
                , 'param_name' => 'link'
                , 'admin_label' => true
                , 'value' => '#'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Text color', 'weddingshop')
                , 'param_name' => 'text_color'
                , 'admin_label' => false
                , 'value' => '#ffffff'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Text color hover', 'weddingshop')
                , 'param_name' => 'text_color_hover'
                , 'admin_label' => false
                , 'value' => '#ffffff'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Background color', 'weddingshop')
                , 'param_name' => 'bg_color'
                , 'admin_label' => false
                , 'value' => '#40bea7'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Background color hover', 'weddingshop')
                , 'param_name' => 'bg_color_hover'
                , 'admin_label' => false
                , 'value' => '#3f3f3f'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Border color', 'weddingshop')
                , 'param_name' => 'border_color'
                , 'admin_label' => false
                , 'value' => '#e8e8e8'
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Border color hover', 'weddingshop')
                , 'param_name' => 'border_color_hover'
                , 'admin_label' => false
                , 'value' => '#40bea7'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Border width', 'weddingshop')
                , 'param_name' => 'border_width'
                , 'admin_label' => false
                , 'value' => '0'
                , 'description' => esc_html__('In pixels. Ex: 1', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Target', 'weddingshop')
                , 'param_name' => 'target'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Self', 'weddingshop') => '_self'
                    , esc_html__('New Window Tab', 'weddingshop') => '_blank'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Size', 'weddingshop')
                , 'param_name' => 'size'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Small', 'weddingshop') => 'small'
                    , esc_html__('Medium', 'weddingshop') => 'medium'
                    , esc_html__('Large', 'weddingshop') => 'large'
                    , esc_html__('X-Large', 'weddingshop') => 'x-large'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'iconpicker'
                , 'heading' => esc_html__('Font icon', 'weddingshop')
                , 'param_name' => 'font_icon'
                , 'admin_label' => false
                , 'value' => ''
                , 'settings' => array(
                    'emptyIcon' => true /* default true, display an "EMPTY" icon? */
                    , 'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
                )
                , 'description' => esc_html__('Add an icon before the text. Ex: fa-lock', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show popup', 'weddingshop')
                , 'param_name' => 'popup'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
                , 'group' => esc_html__('Popup Options', 'weddingshop')
            )
            , array(
                'type' => 'textarea_raw_html'
                , 'heading' => esc_html__('Popup content', 'weddingshop')
                , 'param_name' => 'popup_content'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => ''
                , 'group' => esc_html__('Popup Options', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Single Image ** */
    vc_map(array(
        'name' => esc_html__('FTC Single Image', 'weddingshop'),
        'base' => 'ftc_single_image',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'attach_image'
                , 'heading' => esc_html__('Image', 'weddingshop')
                , 'param_name' => 'img_id'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Image Size', 'weddingshop')
                , 'param_name' => 'img_size'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Ex: thumbnail, medium, large or full', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Image URL', 'weddingshop')
                , 'param_name' => 'img_url'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Input external URL instead of image from library', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link', 'weddingshop')
                , 'param_name' => 'link'
                , 'admin_label' => true
                , 'value' => '#'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link Title', 'weddingshop')
                , 'param_name' => 'link_title'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Hover Effect', 'weddingshop')
                , 'param_name' => 'style_effect'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Widespread Left Right', 'weddingshop') => 'smooth-image'
                    , esc_html__('Border Scale', 'weddingshop') => 'smooth-border-image'
                    , esc_html__('Background Fade Icon', 'weddingshop') => 'smooth-background-image'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Target', 'weddingshop')
                , 'param_name' => 'target'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('New Window Tab', 'weddingshop') => '_blank'
                    , esc_html__('Self', 'weddingshop') => '_self'
                )
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC Heading ** */
    vc_map(array(
        'name' => esc_html__('FTC Heading', 'weddingshop'),
        'base' => 'ftc_heading',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Heading style', 'weddingshop')
                , 'param_name' => 'style'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Style 1', 'weddingshop') => 'style-1'
                    , esc_html__('Style 2', 'weddingshop') => 'style-2'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Heading Size', 'weddingshop')
                , 'param_name' => 'size'
                , 'admin_label' => true
                , 'value' => array(
                    '1' => '1'
                    , '2' => '2'
                    , '3' => '3'
                    , '4' => '4'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Text', 'weddingshop')
                , 'param_name' => 'text'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC Banner ** */
    vc_map(array(
        'name' => esc_html__('FTC Banner', 'weddingshop'),
        'base' => 'ftc_banner',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'attach_image'
                , 'heading' => esc_html__('Background Image', 'weddingshop')
                , 'param_name' => 'bg_id'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Background Url', 'weddingshop')
                , 'param_name' => 'bg_url'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('Input external URL instead of image from library', 'weddingshop')
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Background Color', 'weddingshop')
                , 'param_name' => 'bg_color'
                , 'admin_label' => false
                , 'value' => '#ffffff'
                , 'description' => ''
            )
            , array(
                'type' => 'textarea_html'
                , 'heading' => esc_html__('Banner content', 'weddingshop')
                , 'param_name' => 'content'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Position Banner Content', 'weddingshop')
                , 'param_name' => 'position_content'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Left Top', 'weddingshop') => 'left-top'
                    , esc_html__('Left Bottom', 'weddingshop') => 'left-bottom'
                    , esc_html__('Left Center', 'weddingshop') => 'left-center'
                    , esc_html__('Right Top', 'weddingshop') => 'right-top'
                    , esc_html__('Right Bottom', 'weddingshop') => 'right-bottom'
                    , esc_html__('Right Center', 'weddingshop') => 'right-center'
                    , esc_html__('Center Top', 'weddingshop') => 'center-top'
                    , esc_html__('Center Bottom', 'weddingshop') => 'center-bottom'
                    , esc_html__('Center Center', 'weddingshop') => 'center-center'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link', 'weddingshop')
                , 'param_name' => 'link'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Link Title', 'weddingshop')
                , 'param_name' => 'link_title'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Style Effect', 'weddingshop')
                , 'param_name' => 'style_effect'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Background Scale', 'weddingshop') => 'background-scale'
                    , esc_html__('Background Scale Opacity', 'weddingshop') => 'background-scale-opacity'
                    , esc_html__('Background Scale Dark', 'weddingshop') => 'background-scale-dark'
                    , esc_html__('Background Scale and Line', 'weddingshop') => 'background-scale-and-line'
                    , esc_html__('Background Scale Opacity and Line', 'weddingshop') => 'background-scale-opacity-line'
                    , esc_html__('Background Scale Dark and Line', 'weddingshop') => 'background-scale-dark-line'
                    , esc_html__('Background Opacity and Line', 'weddingshop') => 'background-opacity-and-line'
                    , esc_html__('Background Dark and Line', 'weddingshop') => 'background-dark-and-line'
                    , esc_html__('Background Opacity', 'weddingshop') => 'background-opacity'
                    , esc_html__('Background Dark', 'weddingshop') => 'background-dark'
                    , esc_html__('Line', 'weddingshop') => 'eff-line'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Background Opacity On Device', 'weddingshop')
                , 'param_name' => 'opacity_bg_device'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('Background image will be blurred on device. Note: should set background color ', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Responsive size', 'weddingshop')
                , 'param_name' => 'responsive_size'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Target', 'weddingshop')
                , 'param_name' => 'target'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('New Window Tab', 'weddingshop') => '_blank'
                    , esc_html__('Self', 'weddingshop') => '_self'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Extra Class', 'weddingshop')
                , 'param_name' => 'extra_class'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'weddingshop')
            )
        )
    ));

    /* FTC Testimonial */
    vc_map(array(
        'name' => esc_html__('FTC Testimonial', 'weddingshop'),
        'base' => 'ftc_testimonial',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'ftc_category'
                , 'heading' => esc_html__('Categories', 'weddingshop')
                , 'param_name' => 'categories'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
                , 'class' => 'ftc_testimonial'
            )
            , array(
                'type' => 'textarea'
                , 'heading' => esc_html__('Testimonial IDs', 'weddingshop')
                , 'param_name' => 'ids'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('A comma separated list of testimonial ids', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show Avatar', 'weddingshop')
                , 'param_name' => 'show_avatar'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => '4'
                , 'description' => esc_html__('Number of Posts', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Number of words in excerpt', 'weddingshop')
                , 'param_name' => 'excerpt_words'
                , 'admin_label' => true
                , 'value' => '50'
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Text Color Style', 'weddingshop')
                , 'param_name' => 'text_color_style'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Default', 'weddingshop') => 'text-default'
                    , esc_html__('Light', 'weddingshop') => 'text-light'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show in a carousel slider', 'weddingshop')
                , 'param_name' => 'is_slider'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => '3'
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show pagination dots', 'weddingshop')
                , 'param_name' => 'show_dots'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('If it is set, the navigation buttons will be removed', 'weddingshop')
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Brands Slider ** */
    vc_map(array(
        'name' => esc_html__('FTC Brands Slider', 'weddingshop'),
        'base' => 'ftc_brands_slider',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Style Brand', 'weddingshop')
                , 'param_name' => 'style_brand'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Default', 'weddingshop') => 'style-default'
                    , esc_html__('Light', 'weddingshop') => 'style-light'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => '7'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Rows', 'weddingshop')
                , 'param_name' => 'rows'
                , 'admin_label' => true
                , 'value' => 1
                , 'description' => esc_html__('Number of Rows', 'weddingshop')
            )
            , array(
                'type' => 'ftc_category'
                , 'heading' => esc_html__('Categories', 'weddingshop')
                , 'param_name' => 'categories'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
                , 'class' => 'ftc_brand'
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin_image'
                , 'admin_label' => false
                , 'value' => '30'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Activate link', 'weddingshop')
                , 'param_name' => 'active_link'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Desktop small items', 'weddingshop')
                , 'param_name' => 'desksmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                    , esc_html__('5', 'weddingshop') => 5
                    , esc_html__('6', 'weddingshop') => 6
                )
                , 'description' => esc_html__('Set items on 991px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet items', 'weddingshop')
                , 'param_name' => 'tablet_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 768px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet mini items', 'weddingshop')
                , 'param_name' => 'tabletmini_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 640px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile items', 'weddingshop')
                , 'param_name' => 'mobile_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 480px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile small items', 'weddingshop')
                , 'param_name' => 'mobilesmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 0px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
        )
    ));


    /*     * * FTC Google Map ** */
    vc_map(array(
        'name' => esc_html__('FTC Google Map', 'weddingshop'),
        'base' => 'ftc_google_map',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Address', 'weddingshop')
                , 'param_name' => 'address'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Height', 'weddingshop')
                , 'param_name' => 'height'
                , 'admin_label' => true
                , 'value' => 360
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Zoom', 'weddingshop')
                , 'param_name' => 'zoom'
                , 'admin_label' => true
                , 'value' => 12
                , 'description' => esc_html__('Input a number between 0 and 22', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Map Type', 'weddingshop')
                , 'param_name' => 'map_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('ROADMAP', 'weddingshop') => 'ROADMAP'
                    , esc_html__('SATELLITE', 'weddingshop') => 'SATELLITE'
                    , esc_html__('HYBRID', 'weddingshop') => 'HYBRID'
                    , esc_html__('TERRAIN', 'weddingshop') => 'TERRAIN'
                )
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC Countdown ** */
    vc_map(array(
        'name' => esc_html__('FTC Countdown', 'weddingshop'),
        'base' => 'ftc_countdown',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Day', 'weddingshop')
                , 'param_name' => 'day'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Month', 'weddingshop')
                , 'param_name' => 'month'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Year', 'weddingshop')
                , 'param_name' => 'year'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Text Color Style', 'weddingshop')
                , 'param_name' => 'text_color_style'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Default', 'weddingshop') => 'text-default'
                    , esc_html__('Light', 'weddingshop') => 'text-light'
                )
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC Feedburner Subscription ** */
    vc_map(array(
        'name' => esc_html__('FTC Feedburner Subscription', 'weddingshop'),
        'base' => 'ftc_feedburner_subscription',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Feedburner ID', 'weddingshop')
                , 'param_name' => 'feedburner_id'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => 'Newsletter'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Intro Text Line 1', 'weddingshop')
                , 'param_name' => 'intro_text'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Intro Text Line 2', 'weddingshop')
                , 'param_name' => 'intro_text_2'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Button Text', 'weddingshop')
                , 'param_name' => 'button_text'
                , 'admin_label' => true
                , 'value' => 'Subscribe'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Placeholder Text', 'weddingshop')
                , 'param_name' => 'placeholder_text'
                , 'admin_label' => true
                , 'value' => 'Enter your email address'
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Style', 'weddingshop')
                , 'param_name' => 'style'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Style 1', 'weddingshop') => 'style-1'
                    , esc_html__('Style 2', 'weddingshop') => 'style-2'
                    , esc_html__('Style 3', 'weddingshop') => 'style-3'
                )
                , 'description' => ''
            )
        )
    ));

    /*     * ******************** FTC Product Shortcodes *********************** */

    /*     * * FTC Products ** */
    vc_map(array(
        'name' => esc_html__('FTC Products', 'weddingshop'),
        'base' => 'ftc_products',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Product type', 'weddingshop')
                , 'param_name' => 'product_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Recent', 'weddingshop') => 'recent'
                    , esc_html__('Sale', 'weddingshop') => 'sale'
                    , esc_html__('Featured', 'weddingshop') => 'featured'
                    , esc_html__('Best Selling', 'weddingshop') => 'best_selling'
                    , esc_html__('Top Rated', 'weddingshop') => 'top_rated'
                    , esc_html__('Mixed Order', 'weddingshop') => 'mixed_order'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Custom order', 'weddingshop')
                , 'param_name' => 'custom_order'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('If you enable this option, the Product type option wont be available', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order by', 'weddingshop')
                , 'param_name' => 'orderby'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('None', 'weddingshop') => 'none'
                    , esc_html__('ID', 'weddingshop') => 'ID'
                    , esc_html__('Date', 'weddingshop') => 'date'
                    , esc_html__('Name', 'weddingshop') => 'name'
                    , esc_html__('Title', 'weddingshop') => 'title'
                    , esc_html__('Comment count', 'weddingshop') => 'comment_count'
                    , esc_html__('Random', 'weddingshop') => 'rand'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order', 'weddingshop')
                , 'param_name' => 'order'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Descending', 'weddingshop') => 'DESC'
                    , esc_html__('Ascending', 'weddingshop') => 'ASC'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Products', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'product_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => ''
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product IDs', 'weddingshop')
                , 'param_name' => 'ids'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('Enter product name or slug to search', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Meta position', 'weddingshop')
                , 'param_name' => 'meta_position'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Bottom', 'weddingshop') => 'bottom'
                    , esc_html__('On Thumbnail', 'weddingshop') => 'on-thumbnail'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product image', 'weddingshop')
                , 'param_name' => 'show_image'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product name', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product SKU', 'weddingshop')
                , 'param_name' => 'show_sku'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product price', 'weddingshop')
                , 'param_name' => 'show_price'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product short description', 'weddingshop')
                , 'param_name' => 'show_short_desc'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product rating', 'weddingshop')
                , 'param_name' => 'show_rating'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product label', 'weddingshop')
                , 'param_name' => 'show_label'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product categories', 'weddingshop')
                , 'param_name' => 'show_categories'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show add to cart button', 'weddingshop')
                , 'param_name' => 'show_add_to_cart'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC Products Slider ** */
    vc_map(array(
        'name' => esc_html__('FTC Products Slider', 'weddingshop'),
        'base' => 'ftc_products_slider',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Product type', 'weddingshop')
                , 'param_name' => 'product_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Recent', 'weddingshop') => 'recent'
                    , esc_html__('Sale', 'weddingshop') => 'sale'
                    , esc_html__('Featured', 'weddingshop') => 'featured'
                    , esc_html__('Best Selling', 'weddingshop') => 'best_selling'
                    , esc_html__('Top Rated', 'weddingshop') => 'top_rated'
                    , esc_html__('Mixed Order', 'weddingshop') => 'mixed_order'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Custom order', 'weddingshop')
                , 'param_name' => 'custom_order'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('If you enable this option, the Product type option wont be available', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order by', 'weddingshop')
                , 'param_name' => 'orderby'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('None', 'weddingshop') => 'none'
                    , esc_html__('ID', 'weddingshop') => 'ID'
                    , esc_html__('Date', 'weddingshop') => 'date'
                    , esc_html__('Name', 'weddingshop') => 'name'
                    , esc_html__('Title', 'weddingshop') => 'title'
                    , esc_html__('Comment count', 'weddingshop') => 'comment_count'
                    , esc_html__('Random', 'weddingshop') => 'rand'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order', 'weddingshop')
                , 'param_name' => 'order'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Descending', 'weddingshop') => 'DESC'
                    , esc_html__('Ascending', 'weddingshop') => 'ASC'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Rows', 'weddingshop')
                , 'param_name' => 'rows'
                , 'admin_label' => true
                , 'value' => 1
                , 'description' => esc_html__('Number of Rows', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 6
                , 'description' => esc_html__('Number of Products', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'product_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Meta position', 'weddingshop')
                , 'param_name' => 'meta_position'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Bottom', 'weddingshop') => 'bottom'
                    , esc_html__('On Thumbnail', 'weddingshop') => 'on-thumbnail'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product image', 'weddingshop')
                , 'param_name' => 'show_image'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product name', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product SKU', 'weddingshop')
                , 'param_name' => 'show_sku'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product price', 'weddingshop')
                , 'param_name' => 'show_price'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product short description', 'weddingshop')
                , 'param_name' => 'show_short_desc'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product rating', 'weddingshop')
                , 'param_name' => 'show_rating'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product label', 'weddingshop')
                , 'param_name' => 'show_label'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product categories', 'weddingshop')
                , 'param_name' => 'show_categories'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show add to cart button', 'weddingshop')
                , 'param_name' => 'show_add_to_cart'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Position navigation button', 'weddingshop')
                , 'param_name' => 'position_nav'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Top', 'weddingshop') => 'nav-top'
                    , esc_html__('Bottom', 'weddingshop') => 'nav-bottom'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => '20'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => '20'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Desktop small items', 'weddingshop')
                , 'param_name' => 'desksmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 991px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet items', 'weddingshop')
                , 'param_name' => 'tablet_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 768px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Tablet mini items', 'weddingshop')
                , 'param_name' => 'tabletmini_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 640px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile items', 'weddingshop')
                , 'param_name' => 'mobile_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 480px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Mobile small items', 'weddingshop')
                , 'param_name' => 'mobilesmall_items'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('1', 'weddingshop') => 1
                    , esc_html__('2', 'weddingshop') => 2
                    , esc_html__('3', 'weddingshop') => 3
                    , esc_html__('4', 'weddingshop') => 4
                )
                , 'description' => esc_html__('Set items on 0px', 'weddingshop')
                , 'group' => esc_html__('Responsive Options', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Products Widget ** */
    vc_map(array(
        'name' => esc_html__('FTC Products Widget', 'weddingshop'),
        'base' => 'ftc_products_widget',
        'class' => '',
        'description' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Product type', 'weddingshop')
                , 'param_name' => 'product_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Recent', 'weddingshop') => 'recent'
                    , esc_html__('Sale', 'weddingshop') => 'sale'
                    , esc_html__('Featured', 'weddingshop') => 'featured'
                    , esc_html__('Best Selling', 'weddingshop') => 'best_selling'
                    , esc_html__('Top Rated', 'weddingshop') => 'top_rated'
                    , esc_html__('Mixed Order', 'weddingshop') => 'mixed_order'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 6
                , 'description' => esc_html__('Number of Products', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'product_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product image', 'weddingshop')
                , 'param_name' => 'show_image'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Thumbnail size', 'weddingshop')
                , 'param_name' => 'thumbnail_size'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('shop_thumbnail', 'weddingshop') => 'Product Thumbnails'
                    , esc_html__('shop_catalog', 'weddingshop') => 'Catalog Images'
                    , esc_html__('shop_single', 'weddingshop') => 'Single Product Image'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product name', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product price', 'weddingshop')
                , 'param_name' => 'show_price'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product rating', 'weddingshop')
                , 'param_name' => 'show_rating'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product categories', 'weddingshop')
                , 'param_name' => 'show_categories'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show in a carousel slider', 'weddingshop')
                , 'param_name' => 'is_slider'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Row', 'weddingshop')
                , 'param_name' => 'rows'
                , 'admin_label' => false
                , 'value' => 3
                , 'description' => esc_html__('Number of Rows for slider', 'weddingshop')
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => false
                , 'value' => 1
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => 30
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
                , 'group' => esc_html__('Slider Options', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Product Deals Slider ** */
    vc_map(array(
        'name' => esc_html__('FTC Product Deals Slider', 'weddingshop'),
        'base' => 'ftc_product_deals_slider',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Product type', 'weddingshop')
                , 'param_name' => 'product_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Recent', 'weddingshop') => 'recent'
                    , esc_html__('Featured', 'weddingshop') => 'featured'
                    , esc_html__('Best Selling', 'weddingshop') => 'best_selling'
                    , esc_html__('Top Rated', 'weddingshop') => 'top_rated'
                    , esc_html__('Mixed Order', 'weddingshop') => 'mixed_order'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Item Layout', 'weddingshop')
                , 'param_name' => 'layout'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Grid', 'weddingshop') => 'grid'
                    , esc_html__('List', 'weddingshop') => 'list'
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => false
                , 'value' => 4
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Products', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'product_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show counter', 'weddingshop')
                , 'param_name' => 'show_counter'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Counter position', 'weddingshop')
                , 'param_name' => 'counter_position'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Bottom', 'weddingshop') => 'bottom'
                    , esc_html__('On thumbnail', 'weddingshop') => 'on-thumbnail'
                )
                , 'description' => ''
                , 'dependency' => array('element' => 'show_counter', 'value' => array('1'))
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product image', 'weddingshop')
                , 'param_name' => 'show_image'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show gallery list', 'weddingshop')
                , 'param_name' => 'show_gallery'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Gallery position', 'weddingshop')
                , 'param_name' => 'gallery_position'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Bottom out line', 'weddingshop') => 'bottom-out'
                    , esc_html__('Bottom in line', 'weddingshop') => 'bottom-in'
                )
                , 'description' => ''
                , 'dependency' => array('element' => 'show_counter', 'value' => array('1'))
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product name', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product SKU', 'weddingshop')
                , 'param_name' => 'show_sku'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product price', 'weddingshop')
                , 'param_name' => 'show_price'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product short description', 'weddingshop')
                , 'param_name' => 'show_short_desc'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product rating', 'weddingshop')
                , 'param_name' => 'show_rating'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product label', 'weddingshop')
                , 'param_name' => 'show_label'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product categories', 'weddingshop')
                , 'param_name' => 'show_categories'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show add to cart button', 'weddingshop')
                , 'param_name' => 'show_add_to_cart'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => '20'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Product Categories Slider ** */
    vc_map(array(
        'name' => esc_html__('FTC Product Categories Slider', 'weddingshop'),
        'base' => 'ftc_product_categories_slider',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => 4
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Rows', 'weddingshop')
                , 'param_name' => 'rows'
                , 'admin_label' => true
                , 'value' => 1
                , 'description' => esc_html__('Number of Rows', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 5
                , 'description' => esc_html__('Number of Product Categories', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Parent', 'weddingshop')
                , 'param_name' => 'parent'
                , 'admin_label' => true
                , 'settings' => array(
                    'multiple' => false
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'value' => ''
                , 'description' => esc_html__('Select a category. Get direct children of this category', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Child Of', 'weddingshop')
                , 'param_name' => 'child_of'
                , 'admin_label' => true
                , 'settings' => array(
                    'multiple' => false
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'value' => ''
                , 'description' => esc_html__('Select a category. Get all descendents of this category', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'ids'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('Include these categories', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Hide empty product categories', 'weddingshop')
                , 'param_name' => 'hide_empty'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product category title', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Margin', 'weddingshop')
                , 'param_name' => 'margin'
                , 'admin_label' => false
                , 'value' => '0'
                , 'description' => esc_html__('Set margin between items', 'weddingshop')
            )
        )
    ));


    /*     * * FTC Products In Category Tabs** */
    vc_map(array(
        'name' => esc_html__('FTC Products Category Tabs', 'weddingshop'),
        'base' => 'ftc_products_category_tabs',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Product type', 'weddingshop')
                , 'param_name' => 'product_type'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('Recent', 'weddingshop') => 'recent'
                    , esc_html__('Sale', 'weddingshop') => 'sale'
                    , esc_html__('Featured', 'weddingshop') => 'featured'
                    , esc_html__('Best Selling', 'weddingshop') => 'best_selling'
                    , esc_html__('Top Rated', 'weddingshop') => 'top_rated'
                    , esc_html__('Mixed Order', 'weddingshop') => 'mixed_order'
                )
                , 'description' => esc_html__('Select type of product', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Custom order', 'weddingshop')
                , 'param_name' => 'custom_order'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('If you enable this option, the Product type option wont be available', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order by', 'weddingshop')
                , 'param_name' => 'orderby'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('None', 'weddingshop') => 'none'
                    , esc_html__('ID', 'weddingshop') => 'ID'
                    , esc_html__('Date', 'weddingshop') => 'date'
                    , esc_html__('Name', 'weddingshop') => 'name'
                    , esc_html__('Title', 'weddingshop') => 'title'
                    , esc_html__('Comment count', 'weddingshop') => 'comment_count'
                    , esc_html__('Random', 'weddingshop') => 'rand'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Order', 'weddingshop')
                , 'param_name' => 'order'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Descending', 'weddingshop') => 'DESC'
                    , esc_html__('Ascending', 'weddingshop') => 'ASC'
                )
                , 'dependency' => array('element' => 'custom_order', 'value' => array('1'))
                , 'description' => ''
            )
            , array(
                'type' => 'colorpicker'
                , 'heading' => esc_html__('Background Color', 'weddingshop')
                , 'param_name' => 'bg_color'
                , 'admin_label' => false
                , 'value' => '#f7f6f4'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Columns', 'weddingshop')
                , 'param_name' => 'columns'
                , 'admin_label' => true
                , 'value' => 3
                , 'description' => esc_html__('Number of Columns', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Limit', 'weddingshop')
                , 'param_name' => 'per_page'
                , 'admin_label' => true
                , 'value' => 6
                , 'description' => esc_html__('Number of Products', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Categories', 'weddingshop')
                , 'param_name' => 'product_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('You select banners, icons in the Product Category editor', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Parent Category', 'weddingshop')
                , 'param_name' => 'parent_cat'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => false
                    , 'sortable' => false
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Include children', 'weddingshop')
                , 'param_name' => 'include_children'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => esc_html__('Load the products of sub categories in each tab', 'weddingshop')
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Active tab', 'weddingshop')
                , 'param_name' => 'active_tab'
                , 'admin_label' => false
                , 'value' => 1
                , 'description' => esc_html__('Enter active tab number', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product image', 'weddingshop')
                , 'param_name' => 'show_image'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product name', 'weddingshop')
                , 'param_name' => 'show_title'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product SKU', 'weddingshop')
                , 'param_name' => 'show_sku'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product price', 'weddingshop')
                , 'param_name' => 'show_price'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product short description', 'weddingshop')
                , 'param_name' => 'show_short_desc'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product rating', 'weddingshop')
                , 'param_name' => 'show_rating'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product label', 'weddingshop')
                , 'param_name' => 'show_label'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show product categories', 'weddingshop')
                , 'param_name' => 'show_categories'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show add to cart button', 'weddingshop')
                , 'param_name' => 'show_add_to_cart'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show counter', 'weddingshop')
                , 'param_name' => 'show_counter'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show in a carousel slider', 'weddingshop')
                , 'param_name' => 'is_slider'
                , 'admin_label' => true
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Rows', 'weddingshop')
                , 'param_name' => 'rows'
                , 'admin_label' => true
                , 'value' => array(
                    '1' => '1'
                    , '2' => '2'
                )
                , 'description' => esc_html__('Number of Rows in slider', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Show navigation button', 'weddingshop')
                , 'param_name' => 'show_nav'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('No', 'weddingshop') => 0
                    , esc_html__('Yes', 'weddingshop') => 1
                )
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Auto play', 'weddingshop')
                , 'param_name' => 'auto_play'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
        )
    ));

    /*     * * FTC List Of Product Categories ** */
    vc_map(array(
        'name' => esc_html__('FTC List Of Product Categories', 'weddingshop'),
        'base' => 'ftc_list_of_product_categories',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Block title', 'weddingshop')
                , 'param_name' => 'title'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'attach_image'
                , 'heading' => esc_html__('Background image', 'weddingshop')
                , 'param_name' => 'bg_image'
                , 'admin_label' => false
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Product Category', 'weddingshop')
                , 'param_name' => 'product_cat'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => false
                    , 'sortable' => false
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('Display sub categories of this category', 'weddingshop')
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Include parent category in list', 'weddingshop')
                , 'param_name' => 'include_parent'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Yes', 'weddingshop') => 1
                    , esc_html__('No', 'weddingshop') => 0
                )
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Number of Sub Categories', 'weddingshop')
                , 'param_name' => 'limit_sub_cat'
                , 'admin_label' => true
                , 'value' => 6
                , 'description' => esc_html__('Leave blank to show all', 'weddingshop')
            )
            , array(
                'type' => 'autocomplete'
                , 'heading' => esc_html__('Include these categories', 'weddingshop')
                , 'param_name' => 'include_cats'
                , 'admin_label' => true
                , 'value' => ''
                , 'settings' => array(
                    'multiple' => true
                    , 'sortable' => true
                    , 'unique_values' => true
                )
                , 'description' => esc_html__('If you set the Product Category option above, this option wont be available', 'weddingshop')
            )
        )
    ));

    /*     * * FTC Milestone ** */
    vc_map(array(
        'name' => esc_html__('FTC Milestone', 'weddingshop'),
        'base' => 'ftc_milestone',
        'class' => '',
        'category' => 'ThemeFTC',
        "icon" => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
        'params' => array(
            array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Number', 'weddingshop')
                , 'param_name' => 'number'
                , 'admin_label' => true
                , 'value' => '0'
                , 'description' => ''
            )
            , array(
                'type' => 'textfield'
                , 'heading' => esc_html__('Subject', 'weddingshop')
                , 'param_name' => 'subject'
                , 'admin_label' => true
                , 'value' => ''
                , 'description' => ''
            )
            , array(
                'type' => 'dropdown'
                , 'heading' => esc_html__('Text Color Style', 'weddingshop')
                , 'param_name' => 'text_color_style'
                , 'admin_label' => false
                , 'value' => array(
                    esc_html__('Default', 'weddingshop') => 'text-default'
                    , esc_html__('Light', 'weddingshop') => 'text-light'
                )
                , 'description' => ''
            )
        )
    ));
}

/* * * Add Shortcode Param ** */
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if (!function_exists('ftc_product_catgories_shortcode_param')) {

    function ftc_product_catgories_shortcode_param($settings, $value) {
        $categories = ftc_get_list_categories_shortcode_param(0, $settings);
        $arr_value = explode(',', $value);
        ob_start();
        ?>
        <input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
        <div class="categorydiv">
            <div class="tabs-panel">
                <ul class="categorychecklist">
                    <?php foreach ($categories as $cat) { ?>
                        <li>
                            <label>
                                <input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value)) ? 'checked' : ''; ?> />
                                <?php echo esc_html($cat->name); ?>
                            </label>
                            <?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery('.ftc-select-category').bind('change', function () {
                "use strict";

                var selected = jQuery('.ftc-select-category:checked');
                jQuery('.ftc-hidden-selected-categories').val('');
                var selected_id = new Array();
                selected.each(function (index, ele) {
                    selected_id.push(jQuery(ele).val());
                });
                selected_id = selected_id.join(',');
                jQuery('.ftc-hidden-selected-categories').val(selected_id);
            });
        </script>
        <?php
        return ob_get_clean();
    }

}

if (!function_exists('ftc_get_list_categories_shortcode_param')) {

    function ftc_get_list_categories_shortcode_param($cat_parent_id, $settings) {
        $taxonomy = 'product_cat';
        if (isset($settings['class'])) {
            if ($settings['class'] == 'post_cat') {
                $taxonomy = 'category';
            }
            if ($settings['class'] == 'ftc_testimonial') {
                $taxonomy = 'ftc_testimonial_cat';
            }
            if ($settings['class'] == 'ftc_portfolio') {
                $taxonomy = 'ftc_portfolio_cat';
            }
            if ($settings['class'] == 'ftc_brand') {
                $taxonomy = 'ftc_brand_cat';
            }
        }

        $args = array(
            'taxonomy' => $taxonomy
            , 'hierarchical' => 1
            , 'hide_empty' => 0
            , 'parent' => $cat_parent_id
            , 'title_li' => ''
            , 'child_of' => 0
        );
        $cats = get_categories($args);
        return $cats;
    }

}

if (!function_exists('ftc_get_list_sub_categories_shortcode_param')) {

    function ftc_get_list_sub_categories_shortcode_param($cat_parent_id, $arr_value, $settings) {
        $sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings);
        if (count($sub_categories) > 0) {
            ?>
            <ul class="children">
                        <?php foreach ($sub_categories as $sub_cat) { ?>
                    <li>
                        <label>
                            <input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value)) ? 'checked' : ''; ?> />
                    <?php echo esc_html($sub_cat->name); ?>
                        </label>
                <?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
                    </li>
            <?php } ?>
            </ul>
        <?php
        }
    }

}

if (class_exists('Vc_Vendor_Woocommerce')) {
    $vc_woo_vendor = new Vc_Vendor_Woocommerce();

    /* autocomplete callback */
    add_filter('vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester'));
    add_filter('vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender'));


    $shortcode_field_cats = array();
    $shortcode_field_cats[] = array('ftc_products', 'product_cats');
    $shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
    $shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
    $shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
    $shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
    $shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
    $shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
    $shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
    $shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
    $shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
    $shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');

    foreach ($shortcode_field_cats as $shortcode_field) {
        add_filter('vc_autocomplete_' . $shortcode_field[0] . '_' . $shortcode_field[1] . '_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester'));
        add_filter('vc_autocomplete_' . $shortcode_field[0] . '_' . $shortcode_field[1] . '_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact'));
    }
}
?>