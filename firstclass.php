<?php
namespace useOfnamespaceClassones;
class useOfnamespace
{
	function __Construct()
	{
		echo '<br>the same name class one';
	}

	function call_me_inside_class()
	{
		echo '<br>I am first class member been called through second class';
	}

	function callNow()
	{
		$classTwoobj = new \useOfnamespaceClasstwos\useOfnamespace();
		$classTwoobj->call_me_inside_class();
	}
}