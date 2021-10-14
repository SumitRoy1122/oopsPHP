<?php
namespace useOfnamespaceClassonesWithUse\callingFirstClassFile\Example;
class useOfnamespacewithuse
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
		$classTwoobj = new \useOfnamespaceClasstwosWithUse\callingSecondClassFile\Example\useOfnamespacewithuse();
		$classTwoobj->call_me_inside_class();
	}
}