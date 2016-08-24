<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function getIndex($id = 'guest'){
		$this->getProfile($id);
	}
	
	public function getProfile($id='guest'){
		echo 'Profile test '.$id;
	}
}
