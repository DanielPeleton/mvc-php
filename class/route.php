<?php
class route{
	public static $routes = array();
	
	public function set($route, $function){
		self::$routes[] = $route;

		if($_GET['page'] == $route){
			$function->__invoke();
		}else{
			echo 'error';
		}
	}
}