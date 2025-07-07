<?php

/*
 * Plugin Name: basic_portal
 * Plugin URI: https://localhost/plugins
 * Description: set up site as portal/pwa
 * Author: nullstep
 * Author URI: https://localhost
 * Version: 1.2.2
 */

defined('ABSPATH') or die('⎺\_(ツ)_/⎺');

// defines

define('_PIN', '101730');
define('ALLOW_UNFILTERED_UPLOADS', true);

define('_PLUGIN_BASIC_PTL', 'basic_portal');

define('_URL_BASIC_PTL', plugin_dir_url(__FILE__));
define('_PATH_BASIC_PTL', plugin_dir_path(__FILE__));

//   ▄████████   ▄██████▄   ███▄▄▄▄▄       ▄████████  
//  ███    ███  ███    ███  ███▀▀▀▀██▄    ███    ███  
//  ███    █▀   ███    ███  ███    ███    ███    █▀   
//  ███         ███    ███  ███    ███   ▄███▄▄▄      
//  ███         ███    ███  ███    ███  ▀▀███▀▀▀      
//  ███    █▄   ███    ███  ███    ███    ███         
//  ███    ███  ███    ███  ███    ███    ███         
//  ████████▀    ▀██████▀    ▀█    █▀     ███

// basic_portal args

define('_ARGS_BASIC_PTL', [
	'portal_active' => [
		'type' => 'string',
		'default' => 'no'
	],
	'pwa_active' => [
		'type' => 'string',
		'default' => 'no'
	],
	'clean_adminbar' => [
		'type' => 'string',
		'default' => 'no'
	],
	'clean_sidebar' => [
		'type' => 'string',
		'default' => 'no'
	],
	'clean_widgets' => [
		'type' => 'string',
		'default' => 'no'
	],
	'custom_widgets' => [
		'type' => 'string',
		'default' => 'no'
	],
	'widgets_file' => [
		'type' => 'string',
		'default' => 'no'
	],
	'style_admin' => [
		'type' => 'string',
		'default' => 'no'
	],
	'style_login' => [
		'type' => 'string',
		'default' => 'no'
	],
	'favicon' => [
		'type' => 'string',
		'default' => ''
	],
	'login_logo' => [
		'type' => 'string',
		'default' => ''
	],
	'company_logo' => [
		'type' => 'string',
		'default' => ''
	],
	'company_name' => [
		'type' => 'string',
		'default' => ''
	],
	'portal_title' => [
		'type' => 'string',
		'default' => ''
	],
	'company_details' => [
		'type' => 'string',
		'default' => ''
	],
	'primary_colour' => [
		'type' => 'string',
		'default' => '#333333'
	],
	'secondary_colour' => [
		'type' => 'string',
		'default' => '#555555'
	],
	'bg_colour' => [
		'type' => 'string',
		'default' => '#f5f7f8'
	],
	'block_colour' => [
		'type' => 'string',
		'default' => '#222'
	],
	'contrast_colour' => [
		'type' => 'string',
		'default' => '#111'
	],
	'bg_image' => [
		'type' => 'string',
		'default' => ''
	],
	'widgets' => [
		'type' => 'string',
		'default' => '{}'
	],
	'app_title' => [
		'type' => 'string',
		'default' => ''
	],
	'app_icon' => [
		'type' => 'string',
		'default' => ''
	],
	'bp_css' => [
		'type' => 'string',
		'default' => ''
	],
	'bp_js' => [
		'type' => 'string',
		'default' => ''
	],
]);

// basic_portal admin

define('_ADMIN_BASIC_PTL', [
	'options' => [
		'label' => 'Options',
		'columns' => 4,
		'fields' => [
			'portal_active' => [
				'label' => 'Portal Active',
				'type' => 'check'
			],
			'pwa_active' => [
				'label' => 'PWA Active',
				'type' => 'check'
			],
			'clean_adminbar' => [
				'label' => 'Clean the Admin Bar',
				'type' => 'check'
			],
			'clean_sidebar' => [
				'label' => 'Clean the Admin Side Menu',
				'type' => 'check'
			],
			'clean_widgets' => [
				'label' => 'Clean the Desktop Widgets',
				'type' => 'check'
			],
			'custom_widgets' => [
				'label' => 'Custom Widgets Active',
				'type' => 'check'
			],
			'widgets_file' => [
				'label' => 'Use Widgets JSON File',
				'type' => 'check'
			],
			'style_admin' => [
				'label' => 'Admin CSS/JS Active',
				'type' => 'check'
			],
			'style_login' => [
				'label' => 'Login CSS/JS Active',
				'type' => 'check'
			]
		]
	],
	'branding' => [
		'label' => 'Branding',
		'columns' => 4,
		'fields' => [
			'company_details' => [
				'label' => 'Company Details',
				'type' => 'text'
			],
			'company_name' => [
				'label' => 'Company Name',
				'type' => 'input'
			],
			'favicon' => [
				'label' => 'Site Favicon',
				'type' => 'file'
			],
			'login_logo' => [
				'label' => 'Login Screen Logo',
				'type' => 'file'
			],
			'company_logo' => [
				'label' => 'Company Logo',
				'type' => 'file'
			],
			'bg_image' => [
				'label' => 'Background Image',
				'type' => 'file'
			],
			'portal_title' => [
				'label' => 'Portal Title',
				'type' => 'input'
			],
			'primary_colour' => [
				'label' => 'Primary Brand Colour',
				'type' => 'colour'
			],
			'secondary_colour' => [
				'label' => 'Secondary Brand Colour',
				'type' => 'colour'
			],
			'bg_colour' => [
				'label' => 'Admin Background Colour',
				'type' => 'colour'
			],
			'block_colour' => [
				'label' => 'Admin Block Colour',
				'type' => 'colour'
			],
			'contrast_colour' => [
				'label' => 'Admin Contrast Colour',
				'type' => 'colour'
			]
		]
	],
	'setup' => [
		'label' => 'Setup',
		'columns' => 1,
		'fields' => [
			'widgets' => [
				'label' => 'Widgets',
				'type' => 'code'
			],
			'app_title' => [
				'label' => 'App Menu Title',
				'type' => 'input'
			],
			'app_icon' => [
				'label' => 'App Menu Icon (base64 encoded)',
				'type' => 'input'
			]
		]
	],
	'css' => [
		'label' => 'CSS',
		'columns' => 1,
		'fields' => [
			'bp_css' => [
				'label' => 'Admin Styles',
				'type' => 'code'
			]
		]
	],
	'js' => [
		'label' => 'JS',
		'columns' => 1,
		'fields' => [
			'bp_js' => [
				'label' => 'Admin Scripts',
				'type' => 'code'
			]
		]
	]
]);

// basic_portal api routes

define('_APIPATH_BASIC_PTL',
	'settings'
);

define('_API_BASIC_PTL', [
	[
		'methods' => 'POST',
		'callback' => 'update_settings',
		'args' => _bpSettings::args(),
		'permission_callback' => 'permissions'
	],
	[
		'methods' => 'GET',
		'callback' => 'get_settings',
		'args' => [],
		'permission_callback' => 'permissions'
	]
]);

//     ▄████████     ▄███████▄   ▄█   
//    ███    ███    ███    ███  ███   
//    ███    ███    ███    ███  ███▌  
//    ███    ███    ███    ███  ███▌  
//  ▀███████████  ▀█████████▀   ███▌  
//    ███    ███    ███         ███   
//    ███    ███    ███         ███   
//    ███    █▀    ▄████▀       █▀ 

class _bpAPI {
	public function add_routes() {
		if (count(_API_BASIC_PTL)) {

			foreach(_API_BASIC_PTL as $route) {
				register_rest_route(_PLUGIN_BASIC_PTL . '-api', '/' . _APIPATH_BASIC_PTL, [
					'methods' => $route['methods'],
					'callback' => [$this, $route['callback']],
					'args' => $route['args'],
					'permission_callback' => [$this, $route['permission_callback']]
				]);
			}
		}
	}

	public function permissions() {
		return current_user_can('manage_options');
	}

	public function update_settings(WP_REST_Request $request) {
		$settings = [];
		foreach (_bpSettings::args() as $key => $val) {
			$settings[$key] = $request->get_param($key);
		}
		_bpSettings::save_settings($settings);
		return rest_ensure_response(_bpSettings::get_settings());
	}

	public function get_settings(WP_REST_Request $request) {
		return rest_ensure_response(_bpSettings::get_settings());
	}
}

//     ▄████████     ▄████████      ███          ███       ▄█   ███▄▄▄▄▄       ▄██████▄      ▄████████  
//    ███    ███    ███    ███  ▀█████████▄  ▀█████████▄  ███   ███▀▀▀▀██▄    ███    ███    ███    ███  
//    ███    █▀     ███    █▀      ▀███▀▀██     ▀███▀▀██  ███▌  ███    ███    ███    █▀     ███    █▀   
//    ███          ▄███▄▄▄          ███   ▀      ███   ▀  ███▌  ███    ███   ▄███           ███         
//  ▀███████████  ▀▀███▀▀▀          ███          ███      ███▌  ███    ███  ▀▀███ ████▄   ▀███████████  
//           ███    ███    █▄       ███          ███      ███   ███    ███    ███    ███           ███  
//     ▄█    ███    ███    ███      ███          ███      ███   ███    ███    ███    ███     ▄█    ███  
//   ▄████████▀     ██████████     ▄████▀       ▄████▀    █▀     ▀█    █▀     ████████▀    ▄████████▀ 

class _bpSettings {
	protected static $option_key = _PLUGIN_BASIC_PTL . '-settings';

	public static function args() {
		$args = _ARGS_BASIC_PTL;
		foreach (_ARGS_BASIC_PTL as $key => $val) {
			$val['required'] = true;
			switch ($val['type']) {
				case 'integer': {
					$cb = 'absint';
					break;
				}
				default: {
					$cb = 'sanitize_text_field';
				}
				$val['sanitize_callback'] = $cb;
			}
		}
		return $args;
	}

	public static function get_settings() {
		$defaults = [];
		foreach (_ARGS_BASIC_PTL as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		$saved = get_option(self::$option_key, []);
		if (!is_array($saved) || empty($saved)) {
			return $defaults;
		}
		return wp_parse_args($saved, $defaults);
	}

	public static function save_settings(array $settings) {
		$defaults = [];
		foreach (_ARGS_BASIC_PTL as $key => $val) {
			$defaults[$key] = $val['default'];
		}
		foreach ($settings as $i => $setting) {
			if (!array_key_exists($i, $defaults)) {
				unset($settings[$i]);
			}
		}
		update_option(self::$option_key, $settings);
	}
}

//    ▄▄▄▄███▄▄▄▄       ▄████████  ███▄▄▄▄▄    ███    █▄   
//  ▄██▀▀▀███▀▀▀██▄    ███    ███  ███▀▀▀▀██▄  ███    ███  
//  ███   ███   ███    ███    █▀   ███    ███  ███    ███  
//  ███   ███   ███   ▄███▄▄▄      ███    ███  ███    ███  
//  ███   ███   ███  ▀▀███▀▀▀      ███    ███  ███    ███  
//  ███   ███   ███    ███    █▄   ███    ███  ███    ███  
//  ███   ███   ███    ███    ███  ███    ███  ███    ███  
//   ▀█   ███   █▀     ██████████   ▀█    █▀   ████████▀ 

class _bpMenu {
	protected $slug = _PLUGIN_BASIC_PTL . '-menu';
	protected $assets_url;

	public function __construct($assets_url) {
		$this->assets_url = $assets_url;
		add_action('admin_menu', [$this, 'add_page']);
		add_action('admin_enqueue_scripts', [$this, 'register_assets']);
	}

	public function add_page() {
		add_menu_page(
			_PLUGIN_BASIC_PTL,
			_PLUGIN_BASIC_PTL,
			'manage_options',
			$this->slug,
			[$this, 'render_admin'],
			'data:image/svg+xml;base64,' . base64_encode(
				'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="500px" height="500px" viewbox="0 0 500 500"><path fill="#a7aaad" d="M338.7,244.2l26.2-15.1c-2.2-22.3-10.6-42.7-23.6-59.4l-29.7,8l7.9-29.5c-15.6-11.8-34.3-19.7-54.6-22.3L250,151.6l-14.9-25.8c-21.2,2.7-40.5,11.2-56.5,23.7l7.5,28l-27.8-7.5c-12.8,16.7-21.1,36.9-23.2,58.9l26.2,15.1L136,258.8c3.1,19.3,10.9,36.9,22.3,51.8l27.8-7.5l-7.5,28c16,12.6,35.3,21,56.5,23.7l14.9-25.8l14.9,25.8c20.3-2.6,39-10.5,54.6-22.3l-7.9-29.5l29.7,8c11.6-14.9,19.6-32.8,22.7-52.2L338.7,244.2z"/><path fill="#a7aaad" d="M250,9.8L42,129.9v240.2l208,120.1l208-120.1V129.9L250,9.8z M376,388.7h-61.8l12.2-21.2c-22.3,13.5-48.5,21.2-76.5,21.2s-54.1-7.7-76.5-21.2l12.2,21.2H124l23.6-41c-28.3-27-46-65.1-46-107.4C101.7,158.4,168.1,92,250,92s148.3,66.4,148.3,148.3c0,42.2-17.7,80.4-46,107.4L376,388.7z"/></svg>'
			),
			3
		);

		// add config submenu

		add_submenu_page(
			$this->slug,
			'Configuration',
			'Configuration',
			'manage_options',
			$this->slug
		);
	}

	public function register_assets() {
		$boo = microtime(false);
		wp_register_script($this->slug, $this->assets_url . _PLUGIN_BASIC_PTL . '.js?' . $boo, ['jquery']);
		wp_register_style($this->slug, $this->assets_url . _PLUGIN_BASIC_PTL . '.css?' . $boo);
		wp_localize_script($this->slug, _PLUGIN_BASIC_PTL, [
			'strings' => [
				'saved' => 'Settings Saved',
				'error' => 'Error'
			],
			'api' => [
				'url' => esc_url_raw(rest_url(_PLUGIN_BASIC_PTL . '-api/settings')),
				'nonce' => wp_create_nonce('wp_rest')
			]
		]);
	}

	public function enqueue_assets() {
		if (!wp_script_is($this->slug, 'registered')) {
			$this->register_assets();
		}

		wp_enqueue_media();
		wp_enqueue_code_editor(['type' => 'application/x-httpd-php']);

		wp_enqueue_script($this->slug);
		wp_enqueue_style($this->slug);

		add_filter('tiny_mce_before_init', function($settings) {
			$settings['height'] = '300';
			return $settings;   
		});
	}

	public function render_admin() {
		$this->enqueue_assets();

		$name = _PLUGIN_BASIC_PTL;
		$form = _ADMIN_BASIC_PTL;

		// build form

		echo '<div id="' . $name . '-wrap" class="wrap">';
			echo '<h1>' . $name . '</h1>';
			echo '<p>Configure your ' . $name . ' settings...</p>';
			echo '<form id="' . $name . '-form" method="post">';
				echo '<nav id="' . $name . '-nav" class="nav-tab-wrapper">';

				foreach ($form as $tid => $tab) {
					echo '<a href="#' . $name . '-' . $tid . '" class="nav-tab">' . $tab['label'] . '</a>';
				}
				echo '</nav>';
				echo '<div class="tab-content">';

				foreach ($form as $tid => $tab) {
					echo '<div id="' . $name . '-' . $tid . '" class="' . $name . '-tab">';

					foreach ($tab['fields'] as $fid => $field) {
						echo '<div class="form-block col-' . $tab['columns'] . '">';
						
						switch ($field['type']) {
							case 'input': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								break;
							}
							case 'select': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<select id="' . $fid . '" name="' . $fid . '">';
									foreach ($field['values'] as $value => $label) {
										echo '<option value="' . $value . '">' . $label . '</option>';
									}
								echo '</select>';
								break;
							}
							case 'text': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="tabs" name="' . $fid . '"></textarea>';
								break;
							}
							case 'file': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="button" class="button-primary choose-file-button" value="...">';
								break;
							}
							case 'colour': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<input id="' . $fid . '" type="text" name="' . $fid . '">';
								echo '<input data-id="' . $fid . '" type="color" class="choose-colour-button" value="#000000">';
								break;
							}
							case 'code': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<textarea id="' . $fid . '" class="code" name="' . $fid . '"></textarea>';
								break;
							}
							case 'content': {
								echo '<label for="' . $fid . '">';
									echo $field['label'] . ':';
								echo '</label>';
								echo '<div style="width:100%;display:inline-block">';
									wp_editor('', $fid, [
										'media_buttons' => false,
										'textarea_name' => $fid
									]);
								echo '</div>';
								break;
							}
							case 'check': {
								echo '<em>' . $field['label'] . ':</em>';
								echo '<label class="switch">';
									echo '<input type="checkbox" id="' . $fid . '" name="' . $fid . '" value="yes">';
									echo '<span class="slider"></span>';
								echo '</label>';
								break;
							}
						}
						echo '</div>';
					}
					echo '</div>';
				}
				echo '</div>';
				echo '<div>';
					submit_button();
				echo '</div>';
				echo '<div id="' . $name . '-feedback"></div>';
			echo '</form>';
		echo '</div>';
	}
}


//     ▄█    █▄        ▄████████   ▄█           ▄███████▄  
//    ███    ███      ███    ███  ███          ███    ███  
//    ███    ███      ███    █▀   ███          ███    ███  
//   ▄███▄▄▄▄███▄▄   ▄███▄▄▄      ███          ███    ███  
//  ▀▀███▀▀▀▀███▀   ▀▀███▀▀▀      ███        ▀█████████▀   
//    ███    ███      ███    █▄   ███          ███         
//    ███    ███      ███    ███  ███▌    ▄    ███         
//    ███    █▀       ██████████  █████▄▄██   ▄████▀

// check pin

function bp_check_pin() {
	$pin = $_GET['pin'] ?? 'missing';

	return ($pin == _PIN);
}

// get role from user

function bp_get_role($user) {
	$role = '';

	if (!empty($user->roles) && is_array($user->roles)) {
		foreach ($user->roles as $r)
		$role .= $r;
	}

	return $role;
}

// check if user role is...

function bp_is_user_role($role) {
	$user = wp_get_current_user();

	if ($user) {
		if (in_array($role, (array) $user->roles)) {
			return true;
		}
	}

	return false;
}

function bp_label($slug, $plural = true) {
	return ucwords(str_replace('_', ' ', ($plural) ? bp_plural($slug) : $slug));
}

function bp_plural($string) {
	$no = [
		'personnel'
	];

	switch (substr($string, -1)) {
		case 'y': {
			$plural = rtrim($string, 'y') . 'ies';
			break;
		}
		case 'h': {
			$plural = $string . 'es';
			break;
		}
		case 's': {
			$plural = $string . 'es';
			break;
		}
		default: {
			$plural = (in_array(strtolower(trim($string)), $no) ? $string : $string . 's');
		}
	}

	return $plural;
}

// override new user emails

if (!function_exists('wp_new_user_notification')) {
	function wp_new_user_notification($user_id, $deprecated = null, $notify = '') {
		return;
	}
}


//     ▄███████▄   ▄██████▄      ▄████████      ███         ▄████████   ▄█        
//    ███    ███  ███    ███    ███    ███  ▀█████████▄    ███    ███  ███        
//    ███    ███  ███    ███    ███    ███     ▀███▀▀██    ███    ███  ███        
//    ███    ███  ███    ███   ▄███▄▄▄▄██▀      ███   ▀    ███    ███  ███        
//  ▀█████████▀   ███    ███  ▀▀███▀▀▀▀▀        ███      ▀███████████  ███        
//    ███         ███    ███  ▀███████████      ███        ███    ███  ███        
//    ███         ███    ███    ███    ███      ███        ███    ███  ███▌    ▄  
//   ▄████▀        ▀██████▀     ███    ███     ▄████▀      ███    █▀   █████▄▄██

// init

function bp_init($dir) {
	if (_BP['custom_widgets'] == 'yes') {
		bp_custom_dashboard_widgets();
	}
}

function bp_admin_init() {
	if (!current_user_can('update_core')) {
        remove_action('admin_notices', 'update_nag', 3);
        remove_action('network_admin_notices', 'update_nag', 3);
    }

    wp_deregister_script('wp-a11y');

	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', '', '6.6.0', 'all');
}

// clean up admin bar

function bp_clean_adminbar($admin_bar) {
	$user = wp_get_current_user();

	$admin_bar->remove_node('user-actions');
	$admin_bar->remove_node('user-info');
	$admin_bar->remove_node('logout');
	$admin_bar->remove_node('menu-toggle');
	$admin_bar->remove_node('wp-logo');
	$admin_bar->remove_node('about');
	$admin_bar->remove_node('contribute');
	$admin_bar->remove_node('wporg');
	$admin_bar->remove_node('documentation');
	$admin_bar->remove_node('learn');
	$admin_bar->remove_node('support-forums');
	$admin_bar->remove_node('feedback');
	$admin_bar->remove_node('site-name');
	$admin_bar->remove_node('view-site');
	$admin_bar->remove_node('comments');
	$admin_bar->remove_node('new-content');
	$admin_bar->remove_node('new-post');
	$admin_bar->remove_node('new-media');
	$admin_bar->remove_node('new-page');
	$admin_bar->remove_node('new-user');
	$admin_bar->remove_node('search');
	$admin_bar->remove_node('customize');
	$admin_bar->remove_node('updates');

	$admin_bar->add_menu([
		'id' => 'bp-dashboard',
		'title'=> '<i class="fa-solid fa-gauge" style=""></i> Welcome, ' . $user->display_name,
		'href' => get_admin_url()
	]);
}

// clean the admin side menu

function bp_clean_admin_menu() {
	if (!bp_check_pin()) {
		$GLOBALS['menu'] = [];
	}
}

// admin colours

function bp_admin_branding() {
	$primary_colour = _BP['primary_colour'];
	$contrast_colour = _BP['contrast_colour'];
	$secondary_colour = _BP['secondary_colour'];
	$bg_colour = _BP['bg_colour'];
	$block_colour = _BP['block_colour'];
	$company_logo = wp_upload_dir()['url'] . '/' . _BP['company_logo'];
	$background_img = wp_upload_dir()['url'] . '/' . _BP['bg_image'];

	$styles = <<<CSS
	:root {
		--primary-brand-colour: {$primary_colour};
		--admin-highlight: {$primary_colour};
		--admin-contrast: {$contrast_colour};
		--secondary-brand-colour: {$secondary_colour};
		--bg-colour: {$bg_colour};
		--block-colour: {$block_colour};
		--company-logo: url('{$company_logo}');
		--background-image: url('{$background_img}');
	}
	.postbox-header .hndle {
		justify-content: flex-start;

		& i {
			padding-right: 10px;
		}
	}
CSS;

	$styles = apply_filters('bp_admin_branding', $styles);

	echo '<style>' . "\n" . $styles . "\n" . '</style>';
}

// login screen styling and scripts

function bp_login_styling() {
	$uploads = wp_upload_dir()['url'] . '/';

	$primary_colour = _BP['primary_colour'];
	$contrast_colour = _BP['contrast_colour'];
	$login_logo = $uploads . _BP['login_logo'];
	$favicon = $uploads . _BP['favicon'];
	$portal_title = _BP['portal_title'];

	$styles = <<<CSS
	input:focus {
		border-color: #333 !important;
		box-shadow: 0 0 0 1px #333 !important
	}
	#login-message {
		border-left: 5px solid {$primary_colour};
	}
	.wp-core-ui .button-primary {
		background: #333;
		border-color: #333;
		color: #fefefe
	}
	.wp-core-ui .button-primary:hover {
		background: {$primary_colour};
		border-color: #444;
		color: #fefefe
	}
	.dashicons {
		color: #333
	}
	.login form {
		border-radius: 8px;
		box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px !important;
		margin-bottom: 3rem;
	}
	h1 a {
		background-image: url('{$login_logo}') !important;
		width: 300px !important;
		background-size: 84px 84px !important;
	}
	#backtoblog, .language-switcher {
		display: none
	}
	#nav {
		text-align: center;
	}
CSS;

	$styles = apply_filters('bp_login_branding', $styles);

	echo '<style>' . "\n" . $styles . "\n" . '</style>';

	$js = apply_filters('bp_login_scripts', '');

	echo '<script>' . "\n" . $js . "\n" . '</script>';
	echo '<link rel="shortcut icon" href="' . $favicon . '">';
}

// login screen adjustments

function bp_login_logo_url() {
	return '/';
}

function bp_login_logo_title() {
	return _BP['portal_title'];
}

// admin styling and scripts

function bp_admin_styling() {
	if (!bp_check_pin()) {
		$user = wp_get_current_user();
		$role = bp_get_role($user);
?>
<style>
	body, html {
		height: unset !important;
	}
	html.wp-toolbar {
		padding-top: 10px !important
	}
	#wpcontent, #footer {
		margin-left: 0px !important
	}
	.wp-core-ui .button, .wp-core-ui .button-primary, .wp-core-ui .button-secondary {
		border-radius: 3px
	}
	.wp-core-ui .button-primary {
		background: var(--primary-brand-colour);
		border-color: var(--primary-brand-colour);
		color: #fff;
		text-decoration: none;
		text-shadow: none
	}
	.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
		background: var(--primary-brand-colour);
		border-color: var(--primary-brand-colour);
		color: #fff
	}
	.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
		background: var(--primary-brand-colour);
		border-color: var(--primary-brand-colour);
		color: #fff
	}
	.wp-core-ui .button-secondary {
		color: var(--primary-brand-colour);
		border-color: var(--primary-brand-colour);
		background: var(--secondary-brand-colour);
		vertical-align: top
	}
	.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
		background: #f1f1f1;
		border-color: var(--primary-brand-colour);
		color: var(--primary-brand-colour)
	}
	.wp-core-ui .button-secondary:focus, .wp-core-ui .button.focus, .wp-core-ui .button:focus {
		background: var(--secondary-brand-colour);
		border-color: var(--primary-brand-colour);
		color: var(--primary-brand-colour);
		box-shadow: 0 0 0 1px var(--primary-brand-colour);
		outline: 2px solid transparent;
		outline-offset: 0
	}
	.page-title-action, .actions .button {
		border-color: var(--primary-brand-colour) !important;
		color: var(--primary-brand-colour) !important;
		background: var(--secondary-brand-colour) !important
	}
	.page-title-action.primary, .actions .button {
		border-color: var(--primary-brand-colour) !important;
		color: #fff !important;
		background: var(--primary-brand-colour) !important
	}
	#welcome-panel, #menu-posts, #menu-pages, #menu-comments, #menu-appearance, #menu-plugins, #menu-tools, #menu-settings, #show-settings-link, #wp-admin-bar-comments, #wp-admin-bar-new-content, #application-passwords-section p, .term-parent-wrap, #minor-publishing-actions, #misc-publishing-actions, #screen-meta-links, #wp-admin-bar-wp-logo, #adminmenuback, #adminmenuwrap, #contextual-help-link-wrap, tr.user-language-wrap, #wp-admin-bar-view, .user-rich-editing-wrap, .user-admin-color-wrap, .user-comment-shortcuts-wrap, .user-admin-bar-front-wrap, .user-language-wrap, .user-url-wrap, .user-profile-picture, #application-passwords-section, .user-description-wrap .description, .inline-edit-group .inline-edit-status, #footer-thankyou, #footer-upgrade, #wp-admin-bar-top-secondary {
		display: none;
	}
	#major-publishing-actions {
		border-top: none;
	}
	#banner-logo {
		height: 70px;
		position: relative;
		top: 5px;
		left: -15px
	}
	.icon, .text {
		vertical-align: middle;
		display: inline-block
	}
	#dashboard-widgets {
		& .postbox-header {
			background: #d3d4d7
		}

		& h2 {
			font-size: 1.1rem
		}

		& .inside .button {
			margin-top: 10px;
		}
	}
	@media (width <= 600px) {
		#wpadminbar {
			position: fixed;
		}
	}
	#wpadminbar {
		height: 64px;
		padding-left: 15px;
		background-color: var(--block-colour);
		border-left: 5px solid var(--primary-brand-colour);
		background-image: var(--company-logo);
		background-position: calc(100% - 35px) 50%;
		background-size: auto 70%;
		background-repeat: no-repeat;
		max-width: 100vw;
		overflow-x: hidden;
	}

	#wpadminbar i {
		display: inline-block;
		position: relative;
		margin-right: 1rem;
		font-size: 1.55rem;
		font-weight: 900;
		font-family: "Font Awesome 6 Free";
		top: -2px;
	}
	#wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
		background: none;
		color: var(--primary-brand-colour);
	}
	#wpbody {
		margin-top: 64px;
		min-height: 80vh;
	}
	#wp-admin-bar-bp-dashboard {
		height: 64px;

		& a {
			font-size: 32px;
			line-height: 64px;
		}
	}
	#wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input {
		height: 64px;
	}
	body {
		background-color: var(--bg-colour);
	}
	#wpwrap {
		background: var(--bg-colour) var(--background-image) no-repeat;
		background-size: auto 80%;
		background-position: center top;
	}
	@media (width <= 960px) {
		#wpfooter {
			margin-left: 0 !important;
		}
	}
	#wpfooter {
		position: static;
		display: block;
		background-color: var(--block-colour);
		color: #f0f0f1;
		margin: 30px 0 0 0;
	}
	#footer-thankyou, #footer-upgrade {
		color: #fff;
	}
	.postbox {
		background-color: rgba(255, 255, 255, 0.5);
	}
	#your-profile {
		& h2:not(:first-child) {
			display: none;
		}
	}
	.user-rich-editing-wrap,
	.user-syntax-highlighting-wrap,
	.user-admin-color-wrap,
	.user-comment-shortcuts-wrap,
	.user-admin-bar-front-wrap,
	.user-language-wrap,
	.user-description-wrap,
	#application-passwords-section {
		display: none;
	}
	<?php echo _BP['bp_css']; ?>
</style>
<script>
	jQuery(function($) {
		const URL = '<?php echo admin_url(); ?>';
		const PRIMARY_COLOUR = '<?php echo _BP['primary_colour']; ?>';
		const SECONDARY_COLOUR = '<?php echo _BP['secondary_colour']; ?>';
		const COMPANY_LOGO = '<?php echo wp_upload_dir()['url'] . '/' . _BP['company_logo']; ?>';
		const BACKGROUND_IMAGE = '<?php echo wp_upload_dir()['url'] . '/' . _BP['bg_image']; ?>';
		const COMPANY_NAME = '<?php echo _BP['company_name']; ?>';
		const COMPANY_DETAILS = '<?php echo str_replace("\n", '<br>', _BP['company_details']); ?>';
		const PORTAL_TITLE = '<?php echo _BP['portal_title']; ?>';
		const USER_NAME = '<?php echo $user->display_name; ?>';
		const USER_ROLE = '<?php echo $role; ?>';

		$('#adminmenuback, #adminmenuwrap, #contextual-help-link-wrap, #screen-options-wrap p, #wp-admin-bar-menu-toggle').remove();

		$('#footer-thankyou').html(COMPANY_DETAILS).show();
<?php
		if (in_array($role, ['administrator', 'superadmin', 'admin'])) {
?>
		$('#footer-upgrade').html('').show();
<?php
		}
		else {
?>
		$('#footer-upgrade').html('<p>Portal Powered by</p><img src="' + COMPANY_LOGO + '" style="height:64px">').show();
<?php
		}
?>
		if ($('#wpbody-content .wrap h1').text() == 'Dashboard') {
			$('#wpbody-content .wrap h1').text(PORTAL_TITLE);
		}
		else {
			$('#welcome-panel').empty().after('<div style="margin-bottom:2rem"><a class="button button-primary" href="' + URL + '">Back to Portal Dashboard</a></div>');
		}

		if ($('.user-description-wrap label').text() == 'Biographical Info') {
			$('.user-description-wrap label').text('User Notes');
		}

		if ($('#new-role').length) {
			$('#new_role option[value="administrator"]').remove();
		}

		if ($('#add-new-user').length) {
			$('#role option[value="administrator"]').remove();
		}
	});
	<?php echo _BP['bp_js']; ?>
</script>
<?php
	}
}

// allow extra mime types

function bp_add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	$mimes['webp'] = 'image/webp';
	$mimes['ico'] = 'image/vnd.microsoft.icon';
	$mimes['eot'] = 'application/vnd.ms-fontobject';
	$mimes['otf'] = 'application/octet-stream';
	$mimes['ttf'] = 'application/x-font-ttf';
	$mimes['woff'] = 'application/x-font-woff';
	$mimes['woff2'] = 'application/font-woff2';

	return $mimes;
}


//   ▄█     █▄    ▄█   ████████▄      ▄██████▄      ▄████████      ███         ▄████████  
//  ███     ███  ███   ███   ▀███    ███    ███    ███    ███  ▀█████████▄    ███    ███  
//  ███     ███  ███▌  ███    ███    ███    █▀     ███    █▀      ▀███▀▀██    ███    █▀   
//  ███     ███  ███▌  ███    ███   ▄███          ▄███▄▄▄          ███   ▀    ███         
//  ███     ███  ███▌  ███    ███  ▀▀███ ████▄   ▀▀███▀▀▀          ███      ▀███████████  
//  ███     ███  ███   ███    ███    ███    ███    ███    █▄       ███               ███  
//  ███ ▄█▄ ███  ███   ███   ▄███    ███    ███    ███    ███      ███         ▄█    ███  
//   ▀███▀███▀   █▀    ████████▀     ████████▀     ██████████     ▄████▀     ▄████████▀

// widget class

class _bpWidget {
	private $name;
	private $icon;
	private $title;
	private $kind;
	private $slug;
	private $options;
	private $text;
	private $desc;

	public function __construct($args = []) {
		$this->name = $args['name'] ?? 'r' . strtolower(md5(rand(999) . microtime()));
		$this->icon = (isset($args['icon'])) ? '<i class="fa-solid fa-' . $args['icon'] . '"></i>' : '';
		$this->title = (isset($args['title'])) ? ucwords(str_replace('-', ' ', $args['title'])) : 'No Title';
		$this->kind = $args['kind'] ?? '';
		$this->slug = $args['slug'] ?? '';
		$this->options = $args['options'] ?? null;
		$this->text = (isset($args['text'])) ? '<p>' . $args['text'] . '</p>' : '';
		$this->desc = (isset($args['desc'])) ? '<p>' . $args['desc'] . '</p>' : '';

		$this->init();
	}
	
	public function init() {
		add_action('wp_dashboard_setup', [$this, 'bp_widget']);
	}
	
	public function bp_widget() {
		wp_add_dashboard_widget('bp_' . $this->name . '_widget', $this->icon . ' ' . $this->title, [$this, 'bp_html']);
	}
	
	public function bp_html() {
		echo $this->text;

		if ($this->kind) {
			$admin_url = get_admin_url();
			$user = wp_get_current_user();

			$list = true;
			$add = true;

			if ($this->options) {
				if (!in_array('list', explode(',', $this->options))) {
					$list = false;
				}
				if (!in_array('add', explode(',', $this->options))) {
					$add = false;
				}
			}

			switch ($this->kind) {
				case 'post': {
					if ($list) {
						echo '<a class="button button-primary" href="' . $admin_url .'edit.php?post_type=' . $this->slug . '">List ' . bp_label($this->slug) . '</a>&nbsp;';
					}
					if ($add) {
						echo '&nbsp;<a class="button button-secondary" href="' . $admin_url .'post-new.php?post_type=' . $this->slug . '">Add ' . bp_label($this->slug, false) . '</a>';
					}
					break;
				}
				case 'taxonomy': {
					if ($list) {
						echo '<a class="button button-primary" href="' . $admin_url .'edit-tags.php?taxonomy=' . $this->slug . '">List ' . bp_label($this->slug) . '</a>&nbsp;';
					}
					if ($add) {
						echo '&nbsp;<a class="button button-secondary" href="' . $admin_url .'edit-tags.php?action=new&taxonomy=' . $this->slug . '">Add ' . bp_label($this->slug, false) . '</a>';
					}
					break;
				}
				case 'user': {
					if ($list) {
						echo '<a class="button button-primary" href="' . $admin_url .'users.php">List Users</a>&nbsp;';
					}
					if ($add) {
						echo '&nbsp;<a class="button button-secondary" href="' . $admin_url .'user-new.php">Add User</a>';
					}
					break;
				}
				case 'admin': {
					if (is_array($this->slug) && count($this->slug)) {
						foreach ($this->slug as $slug) {
							list($url, $title) = explode('|', $slug);
							echo '<a class="button button-primary" href="' . $admin_url . 'admin.php?uid=' . $user->ID . '&' . $url . '">' . $title . '</a> &nbsp;';
						}
					}
					else {
						echo '<a class="button button-primary" href="' . $admin_url . 'admin.php?uid=' . $user->ID . '&' . $this->slug . '">' . $this->title . '</a>';
					}
					break;
				}
				case 'action': {
					if (is_array($this->slug) && count($this->slug)) {
						foreach ($this->slug as $slug) {
							list($url, $title) = explode('|', $slug);
							echo '<a class="button button-primary" href="' . $admin_url . $url . '">' . $title . '</a> &nbsp;';
						}
					}
					else {
						echo '<a class="button button-primary" href="' . $admin_url . $this->slug . '">' . $this->title . '</a>';
					}
					break;
				}
			}
		}

		if (is_string($this->slug)) {
			$function = 'bp_' . $this->slug . '_widget';

			if (function_exists($function)) {
				echo call_user_func($function);
			}
		}

		echo $this->desc;
	}
}

function bp_control_widget() {
	return '<a class="button button-primary" href="' . wp_logout_url() .'">Log Out</a>';
}

// remove default dashboard widgets

function bp_clean_dashboard_widgets() {
	global $wp_meta_boxes;
   
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_welcome']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

// add our custom widgets

function bp_custom_dashboard_widgets() {
	global $bp_widgets;

	$user = wp_get_current_user();
	$role = bp_get_role($user);

	if (_BP['widgets_file'] == 'yes') {
		$json = _PATH_BASIC_PTL . 'widgets.json';
		$widgets = (file_exists($json)) ? json_decode(file_get_contents($json), true) : [];
	}
	else {
		$widgets = json_decode(_BP['widgets'], true);
	}

	if ($widgets && count($widgets) > 0) {
		foreach ($widgets as $widget => $keys) {
			$roles = $keys['roles'] ?? null;

			if ($roles) {
				if ($roles == '*' || in_array($role, explode(',', $roles)) || $role == 'administrator') {
					$bp_widgets[$widget] = new _bpWidget([
						'name' => $widget,
						'icon' => $keys['icon'],
						'title' => $keys['title'],
						'kind' => $keys['kind'],
						'slug' => $keys['slug'],
						'options' => $keys['options'] ?? null,
						'text' => $keys['text'],
						'desc' => $keys['description']				
					]);
				}
			}
		}
	}
}


//     ▄████████     ▄███████▄     ▄███████▄  
//    ███    ███    ███    ███    ███    ███  
//    ███    ███    ███    ███    ███    ███  
//    ███    ███    ███    ███    ███    ███  
//  ▀███████████  ▀█████████▀   ▀█████████▀   
//    ███    ███    ███           ███         
//    ███    ███    ███           ███         
//    ███    █▀    ▄████▀        ▄████▀

function bp_app_page() {
	$user = wp_get_current_user();
	$role = bp_get_role($user);

	$post = (isset($_REQUEST['pid'])) ? get_post($_REQUEST['pid']) : null;
	$section = ($_REQUEST['section']) ? ucwords(str_replace('-', ' ', $_REQUEST['section'])) : 'Application';
	
	echo '<div class="wrap">';
		if (function_exists('bp_app_page_content')) {
			bp_app_page_content($user, $role, $post, $section);
		}
	echo '</div>';
}


//     ▄██████▄    ▄██████▄   
//    ███    ███  ███    ███  
//    ███    █▀   ███    ███  
//   ▄███         ███    ███  
//  ▀▀███ ████▄   ███    ███  
//    ███    ███  ███    ███  
//    ███    ███  ███    ███  
//    ████████▀    ▀██████▀   

define('_BP', _bpSettings::get_settings());

global $bp_widgets;

// actions

if (_BP['portal_active'] == 'yes') {
	add_action('init', 'bp_init');
	add_action('admin_init', 'bp_admin_init');

	if (_BP['clean_adminbar'] == 'yes') {
		add_action('admin_bar_menu', 'bp_clean_adminbar', 100);
	}

	if (_BP['clean_sidebar'] == 'yes') {
		add_action('admin_menu', 'bp_clean_admin_menu');
	}

	if (_BP['clean_widgets'] == 'yes') {
		add_action('wp_dashboard_setup', 'bp_clean_dashboard_widgets');
	}

	add_action('admin_head', 'bp_admin_branding');

	if (_BP['style_admin'] == 'yes') {
		add_action('admin_head', 'bp_admin_styling');
	}

	if (_BP['style_login'] == 'yes') {
		add_action('login_head', 'bp_login_styling');
		add_filter('login_headerurl', 'bp_login_logo_url');
		add_filter('login_headertext', 'bp_login_logo_title');
	}

	remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
}

if (_BP['pwa_active'] == 'yes') {
	// pwa stuff
}

add_filter('upload_mimes', 'bp_add_mime_types');

// add app page

add_action('admin_menu', function() {
	$title = (_BP['app_title'] == '') ? 'App' : _BP['app_title'];
	$icon = (_BP['app_icon'] == '') ? '' : 'data:image/svg+xml;base64,' . _BP['app_icon'];

	add_menu_page(
		$title,
		$title,
		'read',
		'app',
		'bp_app_page',
		$icon
	);
});

// boot plugin

add_action('init', function() {
	if (is_admin()) {
		new _bpMenu(_URL_BASIC_PTL);
	}
});

add_action('rest_api_init', function() {
	_bpSettings::args();
	$api = new _bpAPI();
	$api->add_routes();
});

// eof