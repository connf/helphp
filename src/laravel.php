<?php

namespace Connf\HelPHP\Laravel;

/**
 * Laravel custom helper functions
 * British colloquialisms
 */

if (!function_exists('out')) {
	function out($d)
	{
		return output($d);
	}
}


if (!function_exists('output')) {
	function output($d)
	{
		return dump($d);
	}
}

if (!function_exists('dout')) {
	function dout($d)
	{
		return dd($d);
	}
}