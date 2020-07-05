<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_privacy
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Privacy\Administrator\Export;

\defined('_JEXEC') or die;

/**
 * Data object representing a single item within a domain.
 *
 * An item is typically a single row from a database table.
 *
 * @since  3.9.0
 */
class Item
{
	/**
	 * The primary identifier of this item, typically the primary key for a database row.
	 *
	 * @var    integer
	 * @since  3.9.0
	 */
	public $id;

	/**
	 * The fields belonging to this item
	 *
	 * @var    Field[]
	 * @since  3.9.0
	 */
	protected $fields = [];

	/**
	 * Add a field to the item
	 *
	 * @param   Field  $field  The field to add
	 *
	 * @return  void
	 *
	 * @since   3.9.0
	 */
	public function addField(Field $field)
	{
		$this->fields[] = $field;
	}

	/**
	 * Get the item's fields
	 *
	 * @return  Field[]
	 *
	 * @since   3.9.0
	 */
	public function getFields()
	{
		return $this->fields;
	}
}
