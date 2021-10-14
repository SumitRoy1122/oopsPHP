<?php 
/*simple create object and invoking members encapsulation*/
class createObj
{
	function testOBJ()
	{
		echo 'obj is working';
	}
}
$obj = new createObj();
$obj->testOBJ();
/*simple create object and invoking members encapsulation*/

/*simple create constructer and running that creating object*/
class createConstructor
{
	function __Construct()
	{
		echo "<br>".'construt working creation of obj';
	}
}
$obj = new createConstructor();

/*simple create constructer and running that creating object*/

/*simple inhertance to use parent class's members by the child class object */
class inhertanceTodo
{
	function theParentClass()
	{
		echo "<br>".'parent class member is going to be inherited into child class';
	}
}
class childClassOfInhertanceTodo extends inhertanceTodo
{
	function thechildClass()
	{
		echo "<br>".'the child class executed';
	}
}
$obj = new childClassOfInhertanceTodo();
$obj->theParentClass();
$obj->thechildClass();
/*simple inhertance to use parent class's members by the child class object */

/*simple inhertance to use parent object to use parent class member into child class member */
class parentClass
{
	function parentClassmember()
	{
		echo "<br>".'parent class member executed through the childclass';
	}
}
class childClass extends parentClass
{
	function childClassmember()
	{
		echo "<br>".'child class member executed';
		parent::parentClassmember();
	}
}
$obj1 = new childClass();
$obj1->childClassmember();
/*simple inhertance to use parent object to use parent class member into child class member */
/*simple polymorphism to over ride abstract member */
abstract class polimorfismTestParent
{
	abstract function polimorfismOverridding();
}
class polimorfismChild extends polimorfismTestParent
{
	function polimorfismOverridding()
	{
		echo "<br>".'abstruct method over ridden';
	}
}
$obj = new polimorfismChild();
$obj->polimorfismOverridding();
/*simple polymorphism to over ride abstract member */
/*simple polymorphism to over ride abstract member and inherit non abstract member but class is abstract as atleast one member is here abstract*/
abstract class nonAbstructClass
{
	function nonAbstructMethod()
	{
		echo "<br>".'i am here  but non abstruct so i will be inherited by child automatically';
	}
	abstract function nonAbstructClassOverridding();
}
class nonAbstructClassChild extends nonAbstructClass
{
	function nonAbstructClassOverridding()
	{
		echo "<br>".'abstruct method over ridden';
	}
}
$obj = new nonAbstructClassChild();
$obj->nonAbstructMethod();
$obj->nonAbstructClassOverridding();
/*simple polymorphism to over ride abstract member and inherit non abstract member but class is abstract as atleast one member is here abstract*/

/*use of interface for polymorphism*/
interface interfaceClass
{
	function get_ride_interface_member();
}
class implementInterface implements  interfaceClass
{
	function get_ride_interface_member()
	{
		echo '<br> I have been implemented';
	}
}
$obj = new implementInterface();
$obj->get_ride_interface_member();
/*use of interface for polymorphism*/

/*passing data to constructer and access specifier*/
class useOfconstructer
{
	public $name = '';
	public $age = '';
	private $gender = '';
	private $education = '';
	protected $college = '';
	protected $section = '';
	function __construct($a,$b,$c,$d,$e,$f)
	{
		$this->name = $a;
		$this->age = $b;
		$this->gender = $c;
		$this->education = $d;
		$this->college = $e;
		$this->section = $f;
		echo '<br/>'.$this->name.' '.$this->age;
		echo '<br/>'.$this->gender.' '.$this->education;
		echo '<br/>'.$this->college.' '.$this->section;
	}
}

class useOfconstructerChild extends useOfconstructer
{
	function __construct($a,$b,$c,$d)
	{
		parent::__construct('ronit',22,'m','mca','icis','section a');
		echo $this->name.' ';
		echo $this->age.' <br/>';
		//echo $this->gender.' ';//this attribute can not be access here as this is private 
		//echo $this->education.' <br/>';//this attribute can not be access here as this is private 
		echo $this->college.' ';
		echo $this->section.' <br/>'; 
	}
}
$obj = new useOfconstructerChild('sumit',28,'m','bca','unnayani','section b');
echo '<br>';
echo $obj->name;
echo $obj->age;
echo '<br>';
echo $obj->gender;//this attribute can not be access here as this is private 
echo $obj->education;//this attribute can not be access here as this is private 
//echo $obj->college;//this attribute can not be access here as this is protected 
//echo $obj->section;//this attribute can not be access here as this is protected 
/*passing data to constructer*/

/*use of static*/
class useofStatic
{
	static function iamStaticMember()
	{
		echo '<br> I am a static member';
	}

	function iamnotaStaticMember()
	{
		echo '<br> I am a not a static member';
		self::useofSelf();
	}

	function useofSelf()
	{
		echo '<br> I ll be called by self::';
	}
}

class childOfuseofStatic extends useofStatic
{
	function calltheStatic()
	{
		parent::iamStaticMember();
	}
}
$obj = new childOfuseofStatic();
$obj->calltheStatic();
$obj->iamnotaStaticMember();
useofStatic::iamStaticMember();//static member or attribute or class not needed object
/*use of static*/

/*use of namespace*/
include "firstclass.php";
include "secondclass.php";
$firstclass = new useOfnamespaceClassones\useOfnamespace();
$secondclass = new useOfnamespaceClasstwos\useOfnamespace();
$firstclass->callNow();
$secondclass->callNow();
/*use of namespace*/

/*use of use with namespce*/
include "firstclassusekeyword.php";
include "secondclassusekeyword.php";
use useOfnamespaceClassonesWithUse\callingFirstClassFile\Example as fstExmple;
use useOfnamespaceClasstwosWithUse\callingSecondClassFile\Example as scndExmpl;
$firstclass = new fstExmple\useOfnamespacewithuse();
$secondclass = new scndExmpl\useOfnamespacewithuse();
$firstclass->callNow();
$secondclass->callNow();
/*use of use with namespce*/


/*use of trait*/
trait allMyfunctions
{
	function functionToPushinClasses($className)
	{
		echo '<br> i will be called while a class object be created for class '.$className;
	}
}

class traitUseclassOne
{
	use allMyfunctions;
}
$obj = new traitUseclassOne();
$obj->functionToPushinClasses('traitUseclassOne');
class traitUseclasstwo
{
	use allMyfunctions;
}
$obj = new traitUseclasstwo();
$obj->functionToPushinClasses('traitUseclasstwo');
/*use of trait*/

/*trait method over ridding*/
trait overrdingTest
{
	function showme($className)
	{
		echo '<br> i will be called while a class object be created for class '.$className;
	}
}

class classparent
{
	use overrdingTest;
	function showme()
	{
		echo '<br> i will be called while classparent object call';
	}
}

class classchild extends classparent
{
	use overrdingTest;
	function showme()
	{
		echo '<br> i will be called while classchild object call';
	}
}

$obj = new classchild();
$obj->showme('classchild');

/*trait method over ridding*/

/*use of autoload*/
//include "classes/classone.php";
//include "classes/classtwo.php";
function __autoload($class)
{
	include "classes/".$class.".php";
}
$objone = new classone();
$objtwo = new classtwo();
/*use of autoload*/

