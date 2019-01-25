<?php

namespace WPSH\Plugin\Tests;

use WPSH\Plugin;
Use WP_Mock;

/**
 * Core plugin test.
 */
class PluginTest extends TestCase {

	/**
	 * Test plugin setup.
	 *
	 * @covers WPSH\Plugin\Plugin::__construct
	 * @covers WPSH\Plugin\Plugin::uploads_dir
	 */
	public function test_plugin_is_configured() {
		WP_Mock::userFunction( 'wp_upload_dir', array(
			'args' => [
				null,
				false
			],
			'times' => 1,
			'return' => [
				'basedir' => '/path/to/base/dir',
				'baseurl' => 'http://example.com/base/url',
			]
		) );

		$plugin = new Plugin\Plugin( __FILE__ );

		$this->assertEquals(
			'/path/to/base/dir/relative/file.jpeg',
			$plugin->uploads_dir( 'relative/file.jpeg' ),
			'Resolves uploads file path.'
		);
	}

	/**
	 * Test the file helpers.
	 *
	 * @covers WPSH\Plugin\Plugin::file
	 * @covers WPSH\Plugin\Plugin::dir
	 */
	public function test_file_helpers_can_resolve_files() {
		WP_Mock::userFunction( 'wp_upload_dir', array(
			'args' => [
				null,
				false
			],
			'times' => 1,
			'return' => [
				'basedir' => '/path/to/base/dir',
				'baseurl' => 'http://example.com/base/url',
			]
		) );

		$plugin = new Plugin\Plugin( __FILE__ );

		$this->assertEquals(
			__FILE__,
			$plugin->file(),
			'Resolves plugin file path.'
		);

		$this->assertEquals(
			__DIR__,
			$plugin->dir(),
			'Resolves plugin directory path.'
		);
	}

}
