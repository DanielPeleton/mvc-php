<?php
class indexModel extends db{
	public function getModel($index, $data){
		/*
			do something on data and index etc
		
			and give that on getView()
		*/
		indexView::getView($index, $data);
	}
}
