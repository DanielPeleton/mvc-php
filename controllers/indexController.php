<?php
class indexController extends db{
	public function getController($index){
		$data = [
			'example' => 'example',
			'example2' => 'example2'
		];

		indexModel::getModel($index, $data);
	}
}