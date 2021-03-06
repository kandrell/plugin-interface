<?php
namespace Plenty\Modules\Document\Models;


/**
 * The document reference model
 */
abstract class DocumentReference 
{

	const ORDER = 'order';

	const CUSTOMER = 'customer';

	const CATEGORY = 'category';

	const TICKET = 'ticket';

	const ITEM = 'item';

	const BLOG = 'blog';

	const MULTISHOP = 'multishop';

	const WAREHOUSE = 'warehouse';

	const REORDER = 'reorder';

	const FACET = 'facet';

	const FACET_VALUE = 'facet_value';

	const CASH_REGISTER = 'cash_register';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$documentId;
	public		$type;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}