<?php
namespace Plenty\Modules\Order\Date\Models;

use Carbon\Carbon;
use Plenty\Modules\Order\Models\Order;

/**
 * The OrderItemDate model.
 */
abstract class OrderItemDate 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$orderItemId;
	public		$typeId;
	public		$date;
	public		$createdAt;
	public		$updatedAt;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}