<?php

namespace WPSH\Plugin\Store;

/**
 * Interface for working with post meta.
 */
class PostMeta extends ObjectMeta {

	/**
	 * Defines the meta type.
	 *
	 * @return string
	 */
	public function type() {
		return 'post';
	}

}
