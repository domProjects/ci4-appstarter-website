<?php

if (! function_exists('copyright'))
{
	/**
	 * Formatting text for copyright
	 */
	function copyright($textFormat, $year, $company)
	{
		// Automatic Copyright Year
		if (intval($year) == date('Y'))
		{
			$year = intval($year);
		}
		elseif (intval($year) < date('Y'))
		{
			$year = intval($year) . '-' . date('Y');
		}
		elseif (intval($year) > date('Y'))
		{
			$year = date('Y');
		}
		else
		{
			$year = intval($year);
		}

		// Return formatted text
		return sprintf($textFormat, $year, $company);
	}
}

if (! function_exists('title_tag'))
{
	/**
	 * Formatting text for title tag
	 */
	function title_tag($title = '', $subtitle = '', $separator = '|')
	{
		// Formatting text
		if (! empty($title) && empty($subtitle))
		{
			$out = $title;
		}
		elseif (empty($title) && ! empty($subtitle))
		{
			$out = $subtitle;
		}
		elseif (! empty($title) && ! empty($subtitle))
		{
			$out = $subtitle . ' ' . $separator . ' ' . $title;
		}
		else
		{
			$out = 'AppStarter';
		}

		// Return formatted text
		return $out;
	}
}
