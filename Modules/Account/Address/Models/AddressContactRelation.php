<?php
namespace Plenty\Modules\Account\Address\Models;

use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * address contact relation model
 */
abstract class AddressContactRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$typeId;
	public		$addressId;
	public		$address;
	public		$contact;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}