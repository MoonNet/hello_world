<?php
Class Employee{
	var $employee_name;
	var $employee_email;
	var $employee_phone;
	
	public function get_employee_name(){
		return $this->employee_name;			
	}	
}