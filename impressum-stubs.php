<?php

namespace epiphyt\Impressum\blocks;

/**
 * Block registry functionality.
 * 
 * @since	3.0.0
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Block_Registry
{
    /**
     * Initialize the class.
     */
    public function init(): void
    {
    }
    /**
     * Register blocks.
     */
    public function register(): void
    {
    }
}
/**
 * Imprint block functionality.
 * 
 * @since	3.0.0
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Block_Imprint
{
    /**
     * Initialize the class.
     */
    public function init(): void
    {
    }
    /**
     * Enqueue block assets.
     */
    public function enqueue_assets(): void
    {
    }
    /**
     * Update block type arguments.
     * Add custom render callback function.
     * 
     * @param	array	$arguments Current arguments
     * @return	array Updated arguments
     */
    public function update_block_type_arguments(array $arguments): array
    {
    }
}
namespace epiphyt\Impressum\settings;

/**
 * Settings registry functionality.
 * 
 * @since	3.0.0
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Registry
{
    /**
     * Settings registry constructor.
     * 
     * @param	\epiphyt\Impressum\Helper	$helper Helper class
     */
    public function __construct(\epiphyt\Impressum\Helper $helper)
    {
    }
    /**
     * Get a registered setting.
     * 
     * @param	string	$key Setting key
     * @return	?\epiphyt\Impressum\settings\Setting Setting or null
     */
    public function get_setting(string $key): ?\epiphyt\Impressum\settings\Setting
    {
    }
    /**
     * Get all setting types.
     * 
     * @return	string[] List of setting types
     */
    public function get_setting_types(): array
    {
    }
    /**
     * Get all registered settings.
     * 
     * @param	string	$type Settings type
     * @return	\epiphyt\Impressum\settings\Setting[] Registered settings
     */
    public function get_settings(string $type = ''): array
    {
    }
    /**
     * Register a setting.
     * 
     * @param	string					$setting_name Name for the setting
     * @param	array<string, mixed>	$setting_data Data for the setting
     */
    public function register(string $setting_name, array $setting_data): void
    {
    }
    /**
     * Register multiple settings.
     * 
     * @param	array<string, mixed[]>	$settings_data List of settings data
     */
    public function register_multiple(array $settings_data): void
    {
    }
}
/**
 * Settings data related functionality.
 * 
 * @since	3.0.0
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Data
{
    /**
     * Data constructor.
     * 
     * @param	\epiphyt\Impressum\settings\Registry	$registry Settings registry
     */
    public function __construct(\epiphyt\Impressum\settings\Registry $registry)
    {
    }
    /**
     * Initialize functionality.
     */
    public function init(): void
    {
    }
    /**
     * Register filters.
     */
    public function register_filters(): void
    {
    }
    /**
     * Sanitize an option during update.
     * Makes sure that only registered settings are updated.
     * 
     * @param	mixed	$value New value
     * @param	mixed	$old_value Old value
     * @param	string	$option Option name to update
     * @return	mixed Sanitized new value
     */
    public function sanitize_update_option(mixed $value, mixed $old_value, string $option): mixed
    {
    }
}
/**
 * A setting representation.
 * 
 * @since	3.0.0
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Setting
{
    /**
     * @var		array{data_type: array{enum?: string[], type?: string}, description: string, hide_output: bool, setting_attributes: mixed[], setting_callback: ?callable, setting_page: string, setting_section: string, title: string, type: string} Setting data 
     */
    public array $data = [];
    /**
     * @var		string Setting name
     */
    public string $name = '';
    /**
     * @var		string Setting type
     */
    public string $type = '';
    /**
     * @var		mixed Setting value
     */
    public mixed $value = null;
    /**
     * Setting constructor.
     * 
     * @param	string						$name Setting name
     * @param	mixed[]						$data Setting data
     * @param	\epiphyt\Impressum\Helper	$helper Helper class
     */
    public function __construct(string $name, array $data, \epiphyt\Impressum\Helper $helper)
    {
    }
    /**
     * Get the setting's data
     * 
     * @param	string	$key Optional setting key to get the data from
     * @return	array{custom_title?: string, data_type: array{enum?: string[], type?: string}, description: string, hide_output: bool, setting_attributes: mixed[], setting_callback: ?callable, setting_page: string, setting_section: string, title: string, type: string}|mixed Setting data
     */
    public function get_data(string $key = ''): mixed
    {
    }
    /**
     * Get the setting's title
     * 
     * @return	string Setting title
     */
    public function get_title(): string
    {
    }
    /**
     * Get the setting's value.
     * 
     * @param	bool	$merge Whether to merge with global setting (only in Impressum Plus)
     * @return	mixed Setting's value
     */
    public function get_value(bool $merge = false): mixed
    {
    }
    /**
     * Set a new value for the setting.
     * 
     * @param	mixed	$new_value New value to set
     * @return	bool Whether new value has been set successfully
     */
    public function set_value(mixed $new_value): bool
    {
    }
}
namespace epiphyt\Impressum;

/**
 * Represents functions for the admin in Impressum.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Admin
{
    /**
     * @var		?\epiphyt\Impressum\settings\Registry Settings registry
     */
    public ?\epiphyt\Impressum\settings\Registry $settings_registry = null;
    /**
     * Admin constructor.
     * 
     * @param	\epiphyt\Impressum\settings\Registry	$settings_registry Settings registry
     */
    public function __construct(\epiphyt\Impressum\settings\Registry $settings_registry)
    {
    }
    /**
     * Initialize the admin functions.
     */
    public function init(): void
    {
    }
    /**
     * AJAX handler to store the state of dismissible notices.
     */
    public function ajax_notice_handler(): void
    {
    }
    /**
     * Enqueue admin assets.
     * 
     * @param	string	$hook The current admin page
     */
    public function enqueue_assets(string $hook): void
    {
    }
    /**
     * Custom option and settings.
     */
    public function init_settings(): void
    {
    }
    /**
     * Get all invalid fields.
     * 
     * @return	array A list of invalid fields
     */
    public function get_invalid_fields(): array
    {
    }
    /**
     * Add a warning notice if the current imprint is not valid yet.
     */
    public function invalid_notice(): void
    {
    }
    /**
     * Check if the current imprint is valid.
     * Valid means: All required fields are filled with data.
     * 
     * @return	bool True if imprint is valid, false otherwise
     */
    public function is_valid_imprint(): bool
    {
    }
    /**
     * Add sub menu item in options menu.
     */
    public static function register_options_page(): void
    {
    }
    /**
     * Register the Impressum Plus tab.
     * 
     * @param	array	$tabs Currently registered tabs
     * @return	array All registered tabs
     */
    public function register_plus_tab(array $tabs): array
    {
    }
    /**
     * Sub menu item:
     * callback functions
     */
    public static function render_options_page(): void
    {
    }
    /**
     * Add plugin meta links.
     * 
     * @param	array	$input Registered links
     * @param	string	$file Current plugin file
     * @return	array Merged links
     */
    public static function render_plugin_documentation_link(array $input, string $file): array
    {
    }
    /**
     * Updated option to reset the dismiss of the imprint validation notice.
     */
    public function reset_invalid_notice(): void
    {
    }
    /**
     * Add a welcome notice.
     */
    public function welcome_notice(): void
    {
    }
}
/**
 * Singleton functionality.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
trait Singleton
{
    /**
     * @var		static Current instance
     */
    protected static $instance;
    /**
     * Class constructor.
     */
    final private function __construct()
    {
    }
    /**
     * Initialize functionality.
     */
    final protected function init(): void
    {
    }
    /**
     * Class wakeup functionality.
     */
    final public function __wakeup(): void
    {
    }
    /**
     * Class clone functionality.
     */
    final public function __clone()
    {
    }
    /**
     * Get a single instance.
     * 
     * @return	static Current instance
     */
    final public static function get_instance(): static
    {
    }
}
/**
 * Represents functions for the frontend in Impressum.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
class Frontend
{
    use \epiphyt\Impressum\Singleton;
    /**
     * Initialize the frontend functions.
     */
    public function init(): void
    {
    }
    /**
     * Render the imprint output.
     * 
     * @param	array|string	$attributes A set of attributes
     * @return	string The imprint output
     */
    public function render(array|string $attributes): string
    {
    }
    /**
     * Render the block output.
     * 
     * @param	array	$attributes The block attributes
     * @return	string The imprint output
     */
    public function render_block(array $attributes): string
    {
    }
}
/**
 * Represents admin fields for the imprint of Impressum.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
class Admin_Fields
{
    use \epiphyt\Impressum\Singleton;
    /**
     * Checkbox field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function checkbox(array $args): void
    {
    }
    /**
     * Country field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function country(array $args): void
    {
    }
    /**
     * Email field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function email(array $args): void
    {
    }
    /**
     * Initialize fields.
     */
    public function init_fields(): void
    {
    }
    /**
     * Legal Entity field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function legal_entity(array $args): void
    {
    }
    /**
     * Text input field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function text(array $args): void
    {
    }
    /**
     * Page field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function page(array $args): void
    {
    }
    /**
     * Phone field callback.
     * 
     * @param	array	$args The field arguments
     */
    public function phone(array $args): void
    {
    }
    /**
     * Select callback.
     * 
     * @since	2.3.0
     * 
     * @param	array	$args The field arguments
     */
    public function select(array $args): void
    {
    }
    /**
     * Textarea callback.
     * 
     * @param	array	$args The field arguments
     */
    public function textarea(array $args): void
    {
    }
}
/**
 * Helper functions for the Impressum plugin.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
class Helper
{
    /**
     * Print out the settings fields for a particular settings section.
     * 
     * Part of the Settings API. Use this in a settings page to output
     * a specific section. Should normally be called by do_settings_sections()
     * rather than directly.
     * 
     * do_settings_fields() from core with adjustments to the <th> element.
     * 
     * @global	array	$wp_settings_fields Storage array of settings fields and their pages/sections.
     * @since	2.1.0
     * 
     * @param	string	$page Slug title of the admin page whose settings fields you want to show.
     * @param	string	$section Slug title of the settings section whose fields you want to show.
     */
    public static function do_settings_fields(string $page, string $section): void
    {
    }
    /**
     * Prints out all settings sections added to a particular settings page
     * 
     * Part of the Settings API. Use this in a settings page callback function
     * to output all the sections and fields that were added to that $page with
     * add_settings_section() and add_settings_field()
     * 
     * do_settings_sections() from core with custom do_settings_fields()
     * 
     * @global	array	$wp_settings_sections Storage array of all settings sections added to admin pages.
     * @global	array	$wp_settings_fields Storage array of settings fields and info about their pages/sections.
     * @since	2.1.0
     * 
     * @param	string	$page The slug name of the page whose settings sections you want to output.
     */
    public static function do_settings_sections(string $page): void
    {
    }
    /**
     * Get an option from the database.
     * The real function of the wrapper is in the Plus version only.
     * 
     * @param	string	$option The option you want to get
     * @param	bool	$useless Useless in the free version
     * @return	mixed Option value
     */
    public static function get_option(string $option, bool $useless = false): mixed
    {
    }
    /**
     * Invalidate a memoized option value.
     * Hooked to option write actions so the memo never serves stale data.
     * 
     * @param	string	$option Name of the option that changed
     */
    public static function clear_option_cache(string $option): void
    {
    }
}
/**
 * The main plugin class.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Plugin
{
    /**
     * @var		array All settings fields.
     */
    public array $settings_fields = [];
    /**
     * @var		?\epiphyt\Impressum\settings\Registry Settings registry
     */
    public ?\epiphyt\Impressum\settings\Registry $settings_registry = null;
    /**
     * Impressum constructor.
     * 
     * @param	\epiphyt\Impressum\settings\Registry	$settings_registry Settings registry
     */
    public function __construct(\epiphyt\Impressum\settings\Registry $settings_registry)
    {
    }
    /**
     * Initialize the class.
     */
    public function init(): void
    {
    }
    /**
     * Activate the twice-daily cron.
     * 
     * @param	mixed	$value The value on updating option
     * @return	mixed The (untouched) value on updating option
     */
    public function activate(mixed $value = []): mixed
    {
    }
    /**
     * Deactivate the twice-daily cron.
     * This should be called only while deactivating the plugin.
     */
    public function deactivate(): void
    {
    }
    /**
     * Get all fields from an option with their title.
     * 
     * @param	string	$option_name The name of the option
     * @return	array{array{custom_title: string, hide_output: bool, title: string, value: mixed}} The fields
     */
    public function get_block_fields(string $option_name): array
    {
    }
    /**
     * Get a list of countries.
     * 
     * @return	array The country list
     */
    public function get_countries(): array
    {
    }
    /**
     * Get a list of legal entities.
     * 
     * @return	array The legal entity list
     */
    public function get_legal_entities(): array
    {
    }
    /**
     * Load our settings in an array.
     */
    public function load_settings(): void
    {
    }
    /**
     * Load translations.
     */
    public function load_textdomain(): void
    {
    }
}
/**
 * Plugin dependency injection container.
 * 
 * @author	Epiphyt
 * @license	GPL2
 * @package	epiphyt\Impressum
 */
final class Plugin_Container
{
    /**
     * Get a service instance or a WP_Error object.
     * 
     * @param	string	$id Service ID
     * @return	object Service instance object or \WP_Error object
     */
    public function get(string $id): object
    {
    }
    /**
     * Check, whether a service with the given ID exists.
     * 
     * @param	string	$id Service ID
     * @return	bool Whether a service with the given ID exists
     */
    public function has(string $id): bool
    {
    }
    /**
     * Set a service.
     * 
     * @param	string		$id Service ID
     * @param	callable	$factory Service factory
     */
    public function set(string $id, callable $factory): void
    {
    }
}
namespace epiphyt\Impressum;

\define('EPI_IMPRESSUM_FILE', \EPI_IMPRESSUM_BASE . \basename(__FILE__));
\define('EPI_IMPRESSUM_URL', \plugin_dir_url(\EPI_IMPRESSUM_FILE));
\define('EPI_IMPRESSUM_VERSION', '3.0.2');
/**
 * Get the plugin container.
 * 
 * @return	\epiphyt\Impressum\Plugin_Container The plugin container
 */
function get_container(): \epiphyt\Impressum\Plugin_Container
{
}
/**
 * Initialize the plugin.
 */
function initialize_plugin(): void
{
}