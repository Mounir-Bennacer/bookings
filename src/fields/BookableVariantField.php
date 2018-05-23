<?php
/**
 * Bookings plugin for Craft CMS 3.x
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) Ether Creative
 */

namespace ether\bookings\fields;

use craft\base\Field;


/**
 * Class BookableVariantField
 *
 * @author  Ether Creative
 * @package ether\bookings\fields
 * @since   1.0.0
 */
class BookableVariantField extends Field
{

	// Public Methods
	// =========================================================================

	// Public Methods: Static
	// -------------------------------------------------------------------------

	public static function displayName (): string
	{
		return \Craft::t('bookings', 'Bookable Variant');
	}

	public static function hasContentColumn (): bool
	{
		return false;
	}

}