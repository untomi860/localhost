<?php
	namespace Project;
	use \Core\Admin\Model;
	use\Core\Users\Storage\Data;
	
	class Test extends Controller
	{
		public function __construct()
		{
			$model = new model;
			$data  = new data;
		}
	}
?>