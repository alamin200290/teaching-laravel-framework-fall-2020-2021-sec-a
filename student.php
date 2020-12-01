<?php

class Student
{
	//prop
	private $id;
	public $name;
	protected $cgpa;

	//constructor
	function __construct($name="", $id="", $cgpa=0){
		$this->name = $name;
		$this->id = $id;
		$this->cgpa = $cgpa;
	}

	//getter-setter

	public function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

	function getId(){
		return $this->id;
	}

	function setId($id){
		$this->id = $id;
	}

	//method-action
	public abstract function printDetails();
}

 $s1 = new Student();
 echo $s1->name;
