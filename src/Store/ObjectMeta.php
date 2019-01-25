<?php

namespace WPSH\Plugin\Store;

/**
 * WordPress object meta abstraction.
 */
abstract class ObjectMeta {

	/**
	 * Meta key used for the data store.
	 *
	 * @var string
	 */
	protected $key;

	/**
	 * Setup the object meta.
	 *
	 * @param string $key Meta key ID.
	 */
	public function __construct( $key ) {
		$this->key = $key;
	}

	/**
	 * Defines the meta type.
	 *
	 * @return string
	 */
	abstract public function type();

	/**
	 * Meta key ID used for the meta store.
	 *
	 * @return string
	 */
	public function key() {
		return $this->key;
	}

	/**
	 * Write to the data store.
	 *
	 * @param integer $id Post ID used for storing.
	 * @param mixed   $settings Data to save.
	 *
	 * @return boolean If the store was updated.
	 */
	public function set( $id, $settings ) {
		return update_metadata( $this->type(), $id, $this->key, $settings );
	}

	/**
	 * Read from the data store.
	 *
	 * @param integer $id Post ID.
	 *
	 * @return mixed  Any data in the store.
	 */
	public function get( $id ) {
		return get_metadata( $this->type(), $id, $this->key, true );
	}

	/**
	 * Delete a post meta entry.
	 *
	 * @param  integer $id Post ID.
	 *
	 * @return boolean
	 */
	public function delete( $id ) {
		return delete_metadata( $this->type(), $id, $this->key );
	}

}
