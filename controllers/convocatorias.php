<?php
	class Convocatorias extends Controller{
		function __construct(){
			parent::__construct();
			
		}
		function render(){
		$this->view->render('convocatorias/index');
	}
	}
?>