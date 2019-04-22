<?php
	class Ubicapilares extends Controller{
		function __construct(){
			parent::__construct();
			
		}
		function render(){
		$this->view->render('ubicapilares/index');
	}
	}
?>