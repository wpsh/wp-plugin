<?php

namespace WPSH\Plugin\Store;

/**
 * Interface for working with user meta.
 */
class UserMeta extends ObjectMeta {

	/**
	 * Defines the meta type.
	 *
	 * @return string
	 */
	public function type() {
		return 'user';
	}

}
