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

$plugin = new Plugin\Plugin( __FILE__ );

echo $plugin->version(); // Fetches the version string from the plugin header.
```


## Credits

Created by [Kaspars Dambis](https://kaspars.net).
