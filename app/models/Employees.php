<?php

class Employees
{
	private $employees = 
	[
		["id" => 1, "name" => "Jonathan Sequeira", "age" => 27, "salary" => "$80,000"],
		["id" => 2, "name" => "Orion Sequeira", "age" => 1, "salary" => "$800.00"],
		["id" => 3, "name" => "Dungjai Rodtim Sequeira", "age" => 29, "salary" => "$35,000"]
	];

	public function getEmployees () {
		return $this->employees;
	}
}