<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'dashscroll', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'dashscroll' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'dashscroll' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'dashscroll' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'dashscroll' ),
	'button_url'  => 'https://wordpress.org/support/theme/dashscroll/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'dashscroll' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'dashscroll' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'dashscroll' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'dashscroll' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'dashscroll' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'dashscroll' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'dashscroll' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'dashscroll' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'dashscroll' ),
	'description'	=> esc_html__( 'Your blog heading', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'dashscroll' ),
	'description'	=> esc_html__( 'Your blog subheading', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'dashscroll' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> '16',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'dashscroll' ),
	'description'	=> esc_html__( '2 columns of widgets', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'dashscroll' ),
	'description'	=> esc_html__( '2 columns of widgets', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'dashscroll' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Format
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-format',
	'label'			=> esc_html__( 'Single - Post Format', 'dashscroll' ),
	'description'	=> esc_html__( 'Shows post format in post header', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'dashscroll' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'dashscroll' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'dashscroll' ),
		'categories'=> esc_html__( 'Related by categories', 'dashscroll' ),
		'tags'		=> esc_html__( 'Related by tags', 'dashscroll' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'dashscroll' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'dashscroll' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'dashscroll' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'dashscroll' ),
		'content'	=> esc_html__( 'Below content', 'dashscroll' ),
	),
) );
// Header: Search
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'dashscroll' ),
	'description'	=> esc_html__( 'Header search button', 'dashscroll' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'dashscroll' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'dashscroll' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'dashscroll' ),
	'description'	=> esc_html__( 'Square size image', 'dashscroll' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'dashscroll' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'dashscroll' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'dashscroll' ),
	'description'	=> esc_html__( 'A short description of you', 'dashscroll' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'dashscroll' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'dashscroll' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 2', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'dashscroll' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'dashscroll' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'dashscroll' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'dashscroll' ),
	'description'	=> esc_html__( 'Footer credit text', 'dashscroll' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'dashscroll' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'dashscroll' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'dashscroll' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'dashscroll' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'dashscroll' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'dashscroll' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'dashscroll' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'dashscroll' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'dashscroll' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function dashscroll_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'dashscroll' ),
		'description'	=> esc_html__( '(is_home) Primary', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'dashscroll' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'dashscroll' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'dashscroll' ),
		'description'	=> esc_html__( '(is_category) Primary', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'dashscroll' ),
		'description'	=> esc_html__( '(is_search) Primary', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'dashscroll' ),
		'description'	=> esc_html__( '(is_404) Primary', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	Kirki::add_field( 'dashscroll_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'dashscroll' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'dashscroll' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'dashscroll' ),
	) );
	
 } 
add_action( 'init', 'dashscroll_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'dashscroll' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'dashscroll' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'dashscroll' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'dashscroll' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'dashscroll' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'dashscroll' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'dashscroll' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'dashscroll' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'dashscroll' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'dashscroll' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'dashscroll' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'dashscroll' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'dashscroll' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'dashscroll' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'dashscroll' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'dashscroll' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'dashscroll' ),
	'description'	=> esc_html__( 'Select font for the theme', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'dashscroll' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'dashscroll' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'dashscroll' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'dashscroll' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'dashscroll' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'dashscroll' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'dashscroll' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'dashscroll' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'dashscroll' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'dashscroll' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'dashscroll' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'dashscroll' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'dashscroll' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'dashscroll' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'dashscroll' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'dashscroll' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'dashscroll' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'dashscroll' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'dashscroll' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'dashscroll' ),
		'arial'					=> esc_html__( 'Arial', 'dashscroll' ),
		'georgia'				=> esc_html__( 'Georgia', 'dashscroll' ),
		'verdana'				=> esc_html__( 'Verdana', 'dashscroll' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'dashscroll' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'dashscroll' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'dashscroll' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> '1120',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Article Width
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'article-width',
	'label'			=> esc_html__( 'Article Max-width', 'dashscroll' ),
	'description'	=> esc_html__( 'Max-width of the articles.', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> '730',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> '#00a389',
) );
// Styling: Gradient Left
Kirki::add_field( 'dashscroll_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-2',
	'label'			=> esc_html__( 'Secondary Color', 'dashscroll' ),
	'section'		=> 'styling',
	'default'		=> '#e0f4f1',
) );