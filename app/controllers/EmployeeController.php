<?php

use Phalcon\Mvc\Controller;

class EmployeeController extends Controller
{
	public function indexAction()
	{

		$employee = new Employees();
		$employeeArray = $employee->getEmployees();

		
		$this->view->employees = $employeeArray;
		
	}
}