# WP Package Updater - Plugins and themes update library

### Description

Used to enable updates for plugins and themes distributed via WP Plugin Update Server.

### Requirements

The library must sit in a `lib` folder at the root of the plugin or theme directory.

Before deploying the plugin or theme, make sure to change the following value:
- `https://your-update-server.com`  => The URL of the server where WP Plugin Update Server is installed.
- `YOUR_LICENSE_SERVER_SECRET`      => The Software License Management's Secret Key for License Verification Requests
- `https://your-license-server-url` => The URL of the server where Software License Management is installed
- `$prefix_updater`                 => Change this variable's name with your plugin or theme prefix

### Code to include in main plugin file

#### Simple update

```php
require_once plugin_dir_path( __FILE__ ) . 'lib/wp-plugin-updater/class-wp-package-updater.php';

$prefix_updater = new WP_Package_Updater(
  'https://your-update-server.com',
  wp_normalize_path( __FILE__ ),
  wp_normalize_path( plugin_dir_path( __FILE__ ) ),
);
```

#### Update with license check

```php
require_once plugin_dir_path( __FILE__ ) . 'lib/wp-plugin-updater/class-wp-package-updater.php';

$prefix_updater = new WP_Package_Updater(
  'https://your-update-server.com',
  wp_normalize_path( __FILE__ ),
  wp_normalize_path( plugin_dir_path( __FILE__ ) ),
  'YOUR_LICENSE_SERVER_SECRET',
  'https://your-license-server-url'
);
```

### Code to include in functions.php

#### Simple update

```php
require_once get_stylesheet_directory() . '/lib/wp-plugin-updater/class-wp-plugin-updater.php';

$prefix_updater = new WP_Package_Updater(
  'https://your-update-server.com',
  wp_normalize_path( __FILE__ ),
  get_stylesheet_directory(),
);
```

#### Update with license check

```php
require_once get_stylesheet_directory() . '/lib/wp-plugin-updater/class-wp-plugin-updater.php';

$prefix_updater = new WP_Package_Updater(
  'https://your-update-server.com',
  wp_normalize_path( __FILE__ ),
  get_stylesheet_directory(),
  'YOUR_LICENSE_SERVER_SECRET',
  'https://your-license-server-url'
);
```