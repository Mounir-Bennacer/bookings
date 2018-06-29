<?php
/**
 * Bookings plugin for Craft CMS 3.x
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) Ether Creative
 */

namespace ether\bookings\web\twig;

use craft\helpers\Template;
use ether\bookings\elements\Booking;
use ether\bookings\models\Bookable;


/**
 * Class Extension
 *
 * @author  Ether Creative
 * @package ether\bookings\web\twig
 * @since   1.0.0
 */
class Extension extends \Twig_Extension
{

	// Twig
	// =========================================================================

	public function getFunctions ()
	{
		return [
			new \Twig_Function('placeBookingInput', [$this, 'placeBookingInput']),
			new \Twig_Function('confirmBookingInput', [$this, 'confirmBookingInput']),
		];
	}

	// Functions
	// =========================================================================

	/**
	 * {{ placeBookingInput(entry.bookableField) }}
	 *
	 * @param Bookable $bookable
	 *
	 * @return \Twig_Markup
	 * @throws \yii\base\Exception
	 * @throws \yii\base\InvalidConfigException
	 */
	public function placeBookingInput (Bookable $bookable): \Twig_Markup
	{
		$value = $bookable->ownerId;
		$value .= '_' . $bookable->id;
		$value = \Craft::$app->security->hashData($value);

		return Template::raw('<input type="hidden" name="book" value="' . $value . '" />');
	}

	/**
	 * {{ confirmBookingInput(booking) }}
	 *
	 * @param Booking $booking
	 *
	 * @return \Twig_Markup
	 * @throws \yii\base\Exception
	 * @throws \yii\base\InvalidConfigException
	 */
	public function confirmBookingInput (Booking $booking): \Twig_Markup
	{
		$value = \Craft::$app->security->hashData($booking->id);

		return Template::raw('<input type="hidden" name="booking" value="' . $value . '" />');
	}

}