<?php
namespace Plenty\Modules\Account\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Account\Contact\Models\Contact;

/**
 * the account model.
 */
abstract class Account 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$number;
	public		$companyName;
	public		$taxIdNumber;
	public		$valuta;
	public		$discountDays;
	public		$discountPercent;
	public		$timeForPaymentAllowedDays;
	public		$salesRepresentativeContactId;
	public		$userId;
	public		$deliveryTime;
	public		$dealerMinOrderValue;
	public		$createdAt;
	public		$updatedAt;
	public		$contacts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}