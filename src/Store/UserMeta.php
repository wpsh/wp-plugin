<?php

namespace WPSH\Plugin\Store;

/**
 * Interface for working with user meta.
 */
class UserMeta {

	/**
	 * Defines the meta type.
	 *
	 * @return string
	 */
	public function type() {
		return 'user';
	}

}
