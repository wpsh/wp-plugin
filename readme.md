# Helper Library for WordPress Plugins

Work in progress!


## Install

Add this library as a [Composer dependency](https://packagist.org/packages/wpsh/wp-plugin) to your plugin.

```
composer require wpsh/wp-plugin
```


## Usage

```php
<?php

use WPSH\Plugin;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require( __DIR__ . '/vendor/autoload.php' );
}

$plugin = new Plugin\Plugin( __FILE__ );

// Now use it as a dependency for your own plugin.
$awesomePlugin = new AwesomePlugin( $plugin );
$awesomePlugin->init_hooks();
```

### API

TODO: Build documentation from the docblock comments.


## Credits

Created by [Kaspars Dambis](https://kaspars.net).
