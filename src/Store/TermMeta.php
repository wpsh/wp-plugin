<?php

namespace WPSH\Plugin\Store;

/**
 * Interface for working with term meta.
 */
class TermMeta {

	/**
	 * Defines the meta type.
	 *
	 * @return string
	 */
	public function type() {
		return 'term';
	}

}
