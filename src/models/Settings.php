<?php
/**
 * Bookings plugin for Craft CMS 3.x
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) Ether Creative
 */

namespace ether\bookings\models;

use ether\bookings\base\Model;


/**
 * Class Settings
 *
 * @author  Ether Creative
 * @package ether\bookings\models
 * @since   1.0.0
 */
class Settings extends Model
{

	// Properties
	// =========================================================================

	/**
	 * @var int - Number of milliseconds before a booking is expired
	 *            (Defaults to 20 minutes)
	 */
	public $expiryDuration = 1.2e6;

	/**
	 * @var int - Number of milliseconds before an expired booking is purged
	 *            (Defaults to 10 minutes)
	 */
	public $clearExpiredDuration = 6e5;

	// Methods
	// =========================================================================

	public function rules ()
	{
		return [
			[
				['expiryDuration', 'clearExpiredDuration'],
				'required',
			],
			[
				['expiryDuration', 'clearExpiredDuration'],
				'number',
				'integerOnly' => true,
			],
		];
	}

}