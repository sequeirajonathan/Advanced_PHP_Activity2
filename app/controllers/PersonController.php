<?php

use Phalcon\Mvc\Controller;

class PersonController extends Controller
{
	public function indexAction()
	{
		$people = new Employees();
		$id = $this->request->get('id');
		$peopleArray = $people->getEmployees();
		$selected;

		foreach($peopleArray as $person){
			if($person['id'] == $id) {
				$selected = ["name" => $person['name'], "age" => $person['age'], "salary" => $person['salary']];
			}
		}

		$this->view->person = $selected;
	}

}