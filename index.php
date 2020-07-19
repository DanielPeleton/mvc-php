<?php
require_once('route.php');

function __autoload($name){
	$directories = array(
			'./class/',
			'./controllers/',
			'./model/',
			'./view/'
	);
	foreach($directories as $dir){
		if(file_exists($dir.$name.'.php')){
			require_once($dir.$name.'.php');
		}
	}
}