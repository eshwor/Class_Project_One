<?php
// object are basic entities of the object oriented system.problem are analyzed in term of object.
// object may be any thing like person, computer, car, pigeon etc
// class is the collection of attributes and behaviour.
// class is the blue print for an object

class ClassName
{
  public/ private / protected/ var $properties1;
  public/ private / protected/ var $properties2;
  // variable define in class are called properties. properties may be private, protected,public. var define properties are by default public. public properties are accessable from any where.
  // private properties can be access only in the same class.
  // protected properties can be access only from the self class and class derived from it.
  
  public/ private / protected function methodsName(arg1, arg2,...)
  {
    // function define in class are called methods, or operation
	// function may be private, protected,public as properties
	
	$this->properties1  = arg1;
	$this->method2();
	// here $this is a self referencing variable . which can access the properties and function defined in the class.  
  }
  
  
  function method2()
  {
  // .... code snippet here
  }

}

$object  =  new ClassName();
$object->properties1  = "value";
$object-> methodsName("value1");
$object->method2();

// here $object is the object or instance creation of the class className. it is created by using new keyword.
// object can access properties and methods of the class

?>