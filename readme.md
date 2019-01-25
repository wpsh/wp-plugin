# Helper Library for WordPress Plugins

[![Build Status](https://travis-ci.com/wpsh/wp-plugin.svg?branch=master)](https://travis-ci.com/wpsh/wp-plugin)
[![Coverage Status](https://coveralls.io/repos/github/wpsh/wp-plugin/badge.svg?branch=master)](https://coveralls.io/github/wpsh/wp-plugin?branch=master)

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
