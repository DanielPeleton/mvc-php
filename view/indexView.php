<?php
class indexView{
	public function getView($index, $data){
		require_once('./template/' . $index . '.php');
	}
}