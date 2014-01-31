<?php
/**
 * @package    Fuel\Common
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Common;

/**
 * Contains misc helper functions.
 *
 * @package Fuel\Common
 * @since   2.0.0
 * @author  Fuel Development Team
 */
abstract class Helper
{

	/**
	 * Checks if a return value is a Closure without params, and if
	 * so executes it before returning it.
	 *
	 * @param   mixed  $val
	 * @return  mixed  closure result
	 */
	public static function result($val)
	{
		if ( $val instanceof Closure )
		{
			return $val();
		}

		return $val;
	}

}
