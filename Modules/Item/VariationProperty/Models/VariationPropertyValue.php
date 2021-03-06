<?php
namespace Plenty\Modules\Item\VariationProperty\Models;

use Plenty\Modules\Item\Property\Models\Property;
use Plenty\Modules\Item\Property\Models\PropertySelection;
use Plenty\Modules\Item\Variation\Models\Variation;

/**
 * The VariationPropertyValue
 */
abstract class VariationPropertyValue 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$variationId;
	public		$propertyId;
	public		$propertySelectionId;
	public		$valueInt;
	public		$valueFloat;
	public		$valueFile;
	public		$surcharge;
	public		$names;
	public		$property;
	public		$propertySelection;
	public		$valueTexts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}