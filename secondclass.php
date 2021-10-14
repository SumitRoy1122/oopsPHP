<?php 
namespace useOfnamespaceClasstwos;
class useOfnamespace
{
	function __Construct()
	{
		echo '<br>the same name class two';
	}

	function call_me_inside_class()
	{
		echo '<br>I am second class member been called through first class';
	}

	function callNow()
	{
		$classOneobj = new \useOfnamespaceClassones\useOfnamespace();
		$classOneobj->call_me_inside_class();
	}
}