<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DoctorTest extends TestCase{
	use DatabaseMigrations;
	public function testADoctor()
	{
		$this->visit('/register')
		->type("DoctorT","name")
		->type("doctT@gmail.com","email")
		->type("wasdqwer","password")
		->type("wasdqwer","password_confirmation")
		->check("doctor")
		->press("Register")
		->see("Add Patient");
	}
	public function testNotADoctor()
	{
		$this->visit('/register')
		->type("PatientT","name")
		->type("PaitentT@gmail.com","email")
		->type("wasdqwer","password")
		->type("wasdqwer","password_confirmation")
		->press("Register")
		->dontSee("Add Patient");
	}
	public function testModulesLoading()
	{
		$modules=config("module.modules");
		$this->visit('/register')
		->type("PatientT","name")
		->type("PaitentT@gmail.com","email")
		->type("wasdqwer","password")
		->type("wasdqwer","password_confirmation")
		->press("Register")
		->see("the current modules are")
		->assertViewHas("modules",$modules);

	}

}