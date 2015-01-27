<?php
	include("employee.php");
	$employee = new employee();
	print_r($employee->get_employee_name());
?>
